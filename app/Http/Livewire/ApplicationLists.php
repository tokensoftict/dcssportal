<?php

namespace App\Http\Livewire;

use App\Models\Application;
use Livewire\Component;

class ApplicationLists extends Component
{

    public $pendingApplications;
    public $completedApplications;

    public function mount()
    {
        $this->pendingApplications = Application::whereNull("exam_number")->where('user_id',auth()->id())->get();
        $this->completedApplications = Application::whereNotNull("exam_number")->where('user_id',auth()->id())->get();
    }

    public function render()
    {
        return view('livewire.application-lists');
    }
}
