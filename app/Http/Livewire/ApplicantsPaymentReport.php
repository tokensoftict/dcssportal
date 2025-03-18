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

    public $from_date, $to_date = "";

    public array $filter;
    public int $recordCount =0;

    public $completedApplication = [];

    public function mount()
    {
        $this->from = now()->startOfWeek()->toDateTimeString();
        $this->to = now()->endOfWeek()->toDateTimeString();

        $this->from_date = now()->startOfMonth()->format('Y-m-d');
        $this->to_date = now()->endOfMonth()->format('Y-m-d');
    }


    public function viewReport()
    {
        ini_set('memory_limit', '-1');
        $this->from = (new Carbon($this->from_date))->startOfDay()->toDateTimeString();
        $this->to = (new Carbon($this->to_date))->endOfDay()->toDateTimeString();

        $this->completedApplication = Transaction::query()->with('application')
            ->whereBetween("created_at", [$this->from, $this->to])
            ->where('status', '1')->orderBy('id', 'DESC')->get();
    }

    public function generateReport()
    {
        ini_set('memory_limit', '-1');
        return Excel::download(new ApplicantPaymentReports([$this->from, $this->to]),  'payment_report-'.$this->from_date.'-'.$this->to_date.'.xlsx');
    }

    public function render()
    {
        return view('livewire.applicants-payment-report');
    }
}
