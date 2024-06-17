<?php

namespace App\Http\Livewire;

use App\Imports\ImportSuccessfulCandidateForInterview;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithFileUploads;
use Maatwebsite\Excel\Facades\Excel;

class UploadCandidateForInterviewComponent extends Component
{
    use WithFileUploads, LivewireAlert;
    public $excelFile;


    public function render()
    {
        return view('livewire.upload-candidate-for-interview-component');
    }


    public function importCandidate()
    {
        $this->validate(['excelFile' => 'required|mimes:xlsx,xls']);

        Excel::import(new ImportSuccessfulCandidateForInterview(), $this->excelFile);

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
    }
}
