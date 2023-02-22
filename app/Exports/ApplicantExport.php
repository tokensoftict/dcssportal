<?php

namespace App\Exports;

use App\Models\Application;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromView;

class ApplicantExport implements FromView
{
    use Exportable;
    /**
    * @return \Illuminate\Support\Collection
    */

    protected array $filter  = [];

    function  __construct($filter)
    {
        $this->filter = $filter;
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
            $apps>whereNotNull('exam_number');
        }

        $apps = $apps->get();

        return view('export', [
            'applications' => $apps
        ]);
    }
}
