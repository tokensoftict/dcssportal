<?php

namespace App\Http\Livewire;

use App\Exports\ApplicantExport;
use App\Models\Application;
use App\Models\Center;
use App\Models\School;
use Livewire\Component;
use Excel;

class ApplicantsReport extends Component
{
    public $centers;
    public $schools;
    public array $statuses = [
        '1' => "Pending",
        '2' => "Paid"
    ];

    public $center = "";

    public $school = "";

    public $payment_status = "";

    public array $filter;

    private $applications = [];

    public function mount()
    {
        $this->centers = Center::all();
        $this->schools = School::all();
    }

    public function render()
    {
        $data = ['applications' => []];
        return view('livewire.applicants-report', $data);
    }


    public function generateReport()
    {
        $filter = [];

        if(!empty($this->center))
        {
            $filter['center_id'] = $this->center;
        }

        if(!empty($this->school))
        {
            $filter['school_id'] = $this->school;
        }

        if(!empty($this->payment_status))
        {
            $filter['payment_status'] = $this->payment_status;
        }

        $center = Center::find( $this->center)->name;

        return Excel::download(new ApplicantExport($filter),  $center.'.xlsx');
    }

    public function viewReport()
    {
        $apps =  Application::query()->with(['center','state','examState','parental_status','school','school_type','school_type2','school2']);


        if(isset($this->center) && $this->center !="")
        {
            $apps->where('center_id',$this->center);
        }

        if(isset($this->school)  && $this->school !="")
        {
            $apps->where('school_id',$this->school);
        }

        if(isset( $this->payment_status) &&  $this->payment_status == "1")
        {
            if(!auth()->user()->isDcssAdmin()){

                $apps->whereNull('exam_number');
            }

        }

        if(isset($this->payment_status) && $this->payment_status == "2")
        {
            $apps->whereNotNull('exam_number');
        }

        if(auth()->user()->isDcssAdmin() && $this->payment_status != "2")
        {
            $apps->whereNotNull('exam_number');
        }

        $this->applications = $apps->get();
    }

}
