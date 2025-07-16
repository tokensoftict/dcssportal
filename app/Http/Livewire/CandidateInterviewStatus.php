<?php

namespace App\Http\Livewire;

use App\Models\Application;
use App\Models\CandidateQualifiedInterview;
use Livewire\Component;

class CandidateInterviewStatus extends Component
{
    public $exam_number = "";

    public bool $showSuccess = false;
    public bool $showPending = false;

    public array $info = [];

    public string $successMessage = "";

    public function render()
    {
        return view('livewire.candidate-interview-status');
    }


    public function checkInterviewStatus()
    {
        $this->showSuccess = false;
        $this->showPending = false;

        $this->validate(['exam_number' => 'required']);

        $candidate = CandidateQualifiedInterview::where('exam_number', $this->exam_number)->first();
        if($candidate){
            $information = Application::where('exam_number', $this->exam_number)->with(['school', 'school2'])->first();
            $this->info = $information->toArray();
            $this->successMessage= "Your child/ward has passed the 2025 Common Entrance Examination into <b>".$information->school->name."</b> Interview is scheduled for 6 - 8 August 2025 by 8 am daily at his/her first-choice school. An interview fee of <b>N".number_format(2000)."</b> is required. <br/>Visit our website at <a href='http://www.dcss.sch.ng'>www.dcss.sch.ng</a> for further information.";
            //$this->successMessage = "You passed the 2024/2025 Academic Session CSS Entrance Exam and qualified for the selection interview at the ";
            //$this->successMessage .=$information->school->name." The interview exercise will be held daily from 7th to 9th of August 2024 by 8am.";

            $this->showSuccess = true;
            $this->showPending = false;
        }else{
            $this->showPending = true;
            $this->showSuccess = false;
        }

    }


}
