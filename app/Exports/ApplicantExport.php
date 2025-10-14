<?php

namespace App\Exports;

use App\Models\Application;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ApplicantExport implements FromCollection, WithHeadings
{
    use Exportable;

    public $data = [];
    /**
    * @return \Illuminate\Support\Collection
    */

    protected array $filter  = [];

    function  __construct($filter)
    {
        $this->filter = $filter;
    }

    public function collection()
    {
        $apps =  Application::query()->with(['center','state','examState','parental_status','school','school_type','school_type2','school2']);

        if(isset($this->filter['center_id']) && $this->filter['center_id'] !="")
        {
            $apps->where('center_id',$this->filter['center_id']);
        }

        if(isset($this->filter['school_id'])  && $this->filter['school_id'] !="")
        {
            $apps->where('school_id',$this->filter['school_id']);
        }

        if(isset($this->filter['payment_status']) && $this->filter['payment_status'] == "1")
        {
            $apps->whereNull('exam_number');
        }

        if(isset($this->filter['payment_status']) && $this->filter['payment_status'] == "2")
        {
            //$apps->whereNotNull('exam_number');
        }

        $apps->whereNotNull('exam_number');

        $apps->chunk(1000, function($applications)  {
            foreach ($applications as $application){
                $this->data[] = [
                    "Surname" => strtoupper($application->surname),
                    "First Name" => strtoupper($application->firstname),
                    "Other Names"=> strtoupper($application->othernames),
                    "Exam Number" => strtoupper($application->exam_number),
                    "Gender" => $application->gender,
                    "Age" => $application->age,
                    "Telephone" => $application->telephone,
                    "Email Address" => $application->email,
                    "Address" =>$application->address,
                    "Parental Status" => $application->parental_status->name ?? "",
                    "Parent Names" => $application->parent_names,
                    "Rank" =>  $application->rank,
                    "SVC" => $application->svc,
                    "SVC Number" => $application->svc_number,
                    "Retired" => $application->retired ? "YES" : "NO",
                    "Retired Number" => $application->retired_number,
                    "Date of Birth" =>$application->dob,
                    "Unit Information" => $application->unitFormation,
                    "School Type First Choice" => $application->school_type->name ?? "",
                    "School First Choice" => $application->school->name ?? "",
                    "School Type Second Choice" => $application->school_type2->name ?? "",
                    "School Second Choice" => $application->school->name ?? "",
                    "State of Origin" => $application->state->name ??  "",
                    "Exam State" => $application->examState->name ?? "",
                    "Exam Center" => $application->center->name ?? "",
                ];
            }

        });

        return collect($this->data);
    }

    public function view(): View
    {
        $apps =  Application::query()->with(['center','state','examState','parental_status','school','school_type','school_type2','school2']);


        if(isset($this->filter['center_id']) && $this->filter['center_id'] !="")
        {
            $apps->where('center_id',$this->filter['center_id']);
        }

        if(isset($this->filter['school_id'])  && $this->filter['school_id'] !="")
        {
            $apps->where('school_id',$this->filter['school_id']);
        }

        if(isset($this->filter['payment_status']) && $this->filter['payment_status'] == "1")
        {
            $apps->whereNull('exam_number');
        }

        if(isset($this->filter['payment_status']) && $this->filter['payment_status'] == "2")
        {
            //$apps->whereNotNull('exam_number');
        }

        $apps->whereNotNull('exam_number');

        $apps = $apps->get();

        return view('export', [
            'applications' => $apps
        ]);
    }

    public function headings(): array
    {
        return array_keys($this->data[0]);
    }
}
