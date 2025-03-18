<?php

namespace App\Http\Livewire;

use App\Exports\ApplicantPaymentReports;
use App\Models\Transaction;
use Carbon\Carbon;
use Livewire\Component;
use Maatwebsite\Excel\Facades\Excel;

class ApplicantsPaymentReport extends Component
{
    public $from, $to = "";

    public array $filter;
    public int $recordCount =0;

    public $completedApplication = [];

    public function mount()
    {
        $this->from = now()->startOfWeek()->toDateTimeString();
        $this->to = now()->endOfWeek()->toDateTimeString();
    }


    public function viewReport()
    {
        $this->from = (new Carbon($this->from))->startOfDay()->toDateTimeString();
        $this->to = (new Carbon($this->to))->endOfDay()->toDateTimeString();
        $this->completedApplication = Transaction::query()->with('application')
            ->whereBetween("created_at", [$this->from, $this->to])
            ->where('status', '1')->orderBy('id', 'DESC')->get();
    }

    public function generateReport()
    {
        return Excel::download(new ApplicantPaymentReports([$this->from, $this->to]),  'payment_report.xlsx');
    }

    public function render()
    {
        return view('livewire.applicants-payment-report');
    }
}
