<?php

namespace App\Http\Livewire;


use App\Exports\MultiSheetExportCandidate;
use App\Imports\ImportSuccessfulCandidateForInterview;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithFileUploads;
use Maatwebsite\Excel\Facades\Excel;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class UploadCandidateForInterviewComponent extends Component
{
    use WithFileUploads, LivewireAlert;
    public $excelFile;


    public function render()
    {
        return view('livewire.upload-candidate-for-interview-component');
    }


    /**
     * @return void
     */
    public function importCandidate() : BinaryFileResponse
    {
        ini_set('memory_limit','2048M');
        ini_set('max_execution_time', '0');
        $this->validate(['excelFile' => 'required|mimes:xlsx,xls']);

        $importSuccessfulCandidateForInterview = new ImportSuccessfulCandidateForInterview();

        Excel::import($importSuccessfulCandidateForInterview, $this->excelFile);

        $this->alert(
            "success",
            "Import Successfully",
            [
                'position' => 'center',
                'timer' => 6000,
                'toast' => false,
                'text' =>  "Candidate has been Import Successfully!",
            ]
        );

        $this->excelFile = null;

        return Excel::download(new MultiSheetExportCandidate(
            $importSuccessfulCandidateForInterview->examNumbers,
            $importSuccessfulCandidateForInterview->scores,
            $importSuccessfulCandidateForInterview->notFound
        ), "successfulUploadedCandidate.xlsx");

    }
}
