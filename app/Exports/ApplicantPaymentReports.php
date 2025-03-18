<?php

namespace App\Exports;

use App\Models\Transaction;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;

class ApplicantPaymentReports  implements FromView
{
    use Exportable;
    /**
     * @return \Illuminate\Support\Collection
     */


    protected array $filter  = [];

    function  __construct($filter)
    {
        $this->filter = $filter;
    }

    public function view(): View
    {
       $transactions =  Transaction::query()->with('application')
           ->whereBetween("created_at", $this->filter)
           ->where('status', '1')->orderBy('id', 'DESC')->get();

        return view('export_payment', [
            'transactions' => $transactions
        ]);
    }
}
