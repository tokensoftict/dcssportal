<?php

namespace App\Http\Livewire;

use App\Models\Application;
use App\Models\Session;
use App\Models\Transaction;
use Illuminate\Support\Arr;
use Livewire\Component;

class MakePayment extends Component
{

    public Application $application;

    public Session $session;

    public Transaction $transaction;


    public function mount()
    {
        $this->session = Session::where('status',1)->first();
        $this->transaction = new Transaction();
    }

    public function render()
    {
        return view('livewire.make-payment');
    }


    public function generateTransactionDetails()
    {
        $id = time().mt_rand(0,10000000);

        $this->transaction = Transaction::create(
            [
                "application_id" => $this->application->id,
                "transactionId" => $id,
                "amount" => $this->session->form_fee,
                "currency" => "NGN",
                "country" => "NG",
                "email" => $this->application->email,
                "phoneNumber" => $this->application->telephone,
                "firstName" => $this->application->surname,
                "lastName" => $this->application->firstname,
                "customerUrl" => route("account.complete_application",$this->application->id),
                "merchantId" => env("MERCHANT_ID","UPLADMINMERCH"),
            ]
        );

        $data = $this->transaction->toArray();

        Arr::forget($data,['application_id','id','created_at','updated_at','status']);

        $this->dispatchBrowserEvent("payNow",['body'=>json_encode($data)]);
    }
}
