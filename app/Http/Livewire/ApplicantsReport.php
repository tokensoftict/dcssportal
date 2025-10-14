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

    public int $recordCount =0;

    private $applications = [];

    public function mount()
    {
        $this->centers = Center::all();
        $this->schools = School::all();
    }

    public function render()
    {
        $data = ['applications' => []];
        $this->countExpectedRecord();
        return view('livewire.applicants-report', $data);
    }


    private function countExpectedRecord()
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
        if(count($this->runFilter()) > 0) {
            $this->recordCount = $apps->count();
        }
    }


    private function runFilter()
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
        return $filter;
    }

    public function generateReport()
    {

        $filter = $this->runFilter();

        if($this->center != "") {
            $center = Center::find($this->center)->name;
        } else {
            $center = "all_".date("Y")."_report";
        }
dd($center);
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
