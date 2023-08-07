<?php

namespace App\Exports;

use App\Models\Application;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromView;

class ExportApplicantFromExcel implements FromView
{
    use Exportable;
    /**
    * @return \Illuminate\Support\Collection
    */

    protected array $exam_numbers  = [];

    protected $minimalInfo = false;

    function  __construct($exam_numbers, $minimalInfo)
    {
        $this->exam_numbers = $exam_numbers;

        $this->minimalInfo = $minimalInfo;
    }


    public function view(): View
    {
        $apps = [];
        /*
        $apps =  Application::query()->with(['center','state','examState','parental_status','school','school_type','school_type2','school2'])->whereIn('exam_number', $this->exam_numbers)
            ->orderBy('surname', 'ASC')
            ->orderBy('firstname', 'ASC')
            ->orderBy('othernames', 'ASC')
            ->get();
        */

        foreach ($this->exam_numbers as $number)
        {
            $ap = Application::query()->with(['center','state','examState','parental_status','school','school_type','school_type2','school2'])->where('exam_number', $number)->first();

            if(!$ap) dd('not found '.$number);

            $apps[] = $ap;
        }

        if($this->minimalInfo === true)
        {
            return view('minimalexport', [
                'applications' => $apps
            ]);
        }

        return view('export', [
            'applications' => $apps
        ]);
    }
}
