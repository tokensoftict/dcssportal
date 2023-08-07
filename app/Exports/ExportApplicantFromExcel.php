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
        $apps =  Application::query()->with(['center','state','examState','parental_status','school','school_type','school_type2','school2'])->whereIn('exam_number', $this->exam_numbers)
            ->orderBy('surname', 'ASC')
            ->orderBy('firstname', 'ASC')
            ->orderBy('othernames', 'ASC')
            ->get();


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