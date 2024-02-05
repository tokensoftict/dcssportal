<?php

namespace App\Http\Livewire;

use App\Events\CompleteApplicationEvent;
use App\Models\Application;
use App\Models\Transaction;
use App\Models\UserActivity;
use App\Repositories\BranchCollectRepository;
use App\Repositories\ConfirmUpperlinkPaygateTransactionRepository;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class RequeryTransactions extends Component
{
    use LivewireAlert;

    public Application $application;

    public array $status = ['0' => '<span class="bg-red-1 rounded-8 text-white text-11 p-2">PENDING</span', '1'=>'<span class="bg-green-5 rounded-8 text-white text-11 p-2">SUCCESSFUL</span>'];


    private BranchCollectRepository $branchCollectRepository;

    private ConfirmUpperlinkPaygateTransactionRepository $confirmUpperlinkPaygateTransactionRepository;


    public function boot(ConfirmUpperlinkPaygateTransactionRepository $confirmUpperlinkPaygateTransactionRepository, BranchCollectRepository $branchCollectRepository)
    {
        $this->confirmUpperlinkPaygateTransactionRepository = $confirmUpperlinkPaygateTransactionRepository;
        $this->branchCollectRepository = $branchCollectRepository;
    }

    public function render()
    {
        $transactions = $this->application->transactions;
        return view('livewire.requery-transactions',['transactions' =>$transactions ]);
    }


    public function checkTransaction($transaction_id)
    {
        $transaction = Transaction::find($transaction_id);

        if(!$transaction) {

            $this->alert("error",
                "Re-query Transaction",
                [
                    'position' => 'center',
                    'timer' => 3000,
                    'toast' => false,
                    'text' =>  "Invalid transaction",
                ]
            );

            return false;
        }

        if($transaction->gateway === "UPPERLINKPAYGATE")
        {
            UserActivity::logActivities([
                'user_id' =>  $transaction->application->user_id,
                'transaction_id' => $transaction->id,
                'description' => 'Re-querying upperlink paygate transaction',
            ]);

            $status = $this->confirmUpperlinkPaygateTransactionRepository->confirmTransaction($transaction->transactionId);

        }else{
            $status = $this->branchCollectRepository->requeryTransaction($transaction);
        }

        if(is_bool($status) && $status === true)
        {
            $transaction->status = 1;

            $transaction->update();

            event(new CompleteApplicationEvent($transaction->application));

            $this->alert("success",
                "Re-query Transaction",
                [
                    'position' => 'center',
                    'timer' => 6000,
                    'toast' => false,
                    'text' =>  "Payment successful, You can now print your Photocard.",
                ]
            );

        }
        else {

            $this->alert("error",
                "Re-query Transaction",
                [
                    'position' => 'center',
                    'timer' => 3000,
                    'toast' => false,
                    'text' =>  "Payment Failed Reason : ".$status
                ]
            );

        }
        return true;
    }

}
