<?php

namespace App\Http\Livewire;

use App\Exports\MultiSheetExportCandidate;
use App\Imports\ImportNewCandidateAndGenerateExamNumber;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithFileUploads;
use Maatwebsite\Excel\Facades\Excel;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class UploadCandidateAndGenerateExamNumbers extends Component
{
    use WithFileUploads, LivewireAlert;

    public $excelFile;

    public function render()
    {
        return view('livewire.upload-candidate-and-generate-exam-numbers');
    }

    public function importCandidate() : BinaryFileResponse
    {
        ini_set('memory_limit','2048M');
        ini_set('max_execution_time', '0');
        $this->validate(['excelFile' => 'required|mimes:xlsx,xls']);

        $importCandidateAndGenerateExamNumbers = new ImportNewCandidateAndGenerateExamNumber();
        Excel::import($importCandidateAndGenerateExamNumbers, $this->excelFile);

        $this->alert(
            "success",
            "Import Successfully",
            [
                'position' => 'center',
                'timer' => 6000,
                'toast' => false,
                'text' =>  "Candidate has been Uploaded Successfully!",
            ]
        );

        return Excel::download(new MultiSheetExportCandidate(
            $importCandidateAndGenerateExamNumbers->examNumbers,
            $importCandidateAndGenerateExamNumbers->scores,
            $importCandidateAndGenerateExamNumbers->notFound
        ), "successfulGeneratedCandidate.xlsx");
    }
}
