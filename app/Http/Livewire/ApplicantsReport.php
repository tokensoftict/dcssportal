<?php

namespace App\Http\Livewire;

use App\Exports\ApplicantExport;
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

    public function mount()
    {
        $this->centers = Center::all();
        $this->schools = School::all();
    }

    public function render()
    {
        return view('livewire.applicants-report');
    }


    public function generateReport()
    {
        $filter = [
            'center_id' => $this->center,
            'school_id' => $this->school,
            'payment_status' => $this->payment_status
        ];

        return Excel::download(new ApplicantExport($filter), 'applicants-'.time().'-export.xlsx');
    }

}