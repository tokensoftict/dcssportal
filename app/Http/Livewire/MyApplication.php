<?php

namespace App\Http\Livewire;

use App\Models\Application;
use App\Models\Session;
use App\Models\Transaction;
use Livewire\Component;

class MyApplication extends Component
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
        return view('livewire.my-application');
    }
}
