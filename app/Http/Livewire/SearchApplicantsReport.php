<?php

namespace App\Http\Livewire;

use App\Exports\ApplicantExport;
use App\Models\Application;
use Livewire\Component;
use Excel;

class SearchApplicantsReport extends Component
{
    public array $statuses = [
        '1' => "Pending",
        '2' => "Paid"
    ];

    public $search = "";
    public $payment_status = "";
    public int $recordCount = 0;
    private $applications = [];

    public function render()
    {
        $this->countExpectedRecord();
        return view('livewire.search-applicants-report', [
            'applications' => $this->applications
        ]);
    }

    private function buildQuery()
    {
        $apps = Application::query()->with(['center', 'state', 'examState', 'parental_status', 'school', 'school_type', 'school_type2', 'school2']);

        if (isset($this->search) && $this->search !== "") {
            $searchVal = $this->search;
            $apps->where(function($q) use ($searchVal) {
                $q->where('email', 'like', '%' . $searchVal . '%')
                  ->orWhere('surname', 'like', '%' . $searchVal . '%')
                  ->orWhere('firstname', 'like', '%' . $searchVal . '%')
                  ->orWhere('othernames', 'like', '%' . $searchVal . '%')
                  ->orWhere('telephone', 'like', '%' . $searchVal . '%')
                  ->orWhere('exam_number', 'like', '%' . $searchVal . '%');
            });
        }

        if (isset($this->payment_status) && $this->payment_status == "1") {
            if (!auth()->user()->isDcssAdmin()) {
                $apps->whereNull('exam_number');
            }
        }

        if (isset($this->payment_status) && $this->payment_status == "2") {
            $apps->whereNotNull('exam_number');
        }

        if (auth()->user()->isDcssAdmin() && $this->payment_status != "2") {
            $apps->whereNotNull('exam_number');
        }

        return $apps;
    }

    private function countExpectedRecord()
    {
        if ($this->search !== "" || $this->payment_status !== "") {
            $this->recordCount = $this->buildQuery()->count();
        } else {
            $this->recordCount = 0;
        }
    }

    public function generateReport()
    {
        $filter = [];
        if ($this->search !== "") {
            $filter['search'] = $this->search;
        }
        if ($this->payment_status !== "") {
            $filter['payment_status'] = $this->payment_status;
        }

        $filename = "search_report_" . date("Y_m_d_His");
        return Excel::download(new ApplicantExport($filter), $filename . '.xlsx');
    }

    public function viewReport()
    {
        $this->applications = $this->buildQuery()->get();
    }
}
