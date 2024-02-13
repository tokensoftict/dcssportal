<?php

namespace App\Console\Commands;

use App\Events\CompleteApplicationEvent;
use App\Models\Transaction;
use App\Repositories\ConfirmUpperlinkPaygateTransactionRepository;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class ProcessAllPendingTransactionPayment extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'requery:pending-transaction';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command is to re-query pending transaction in mid night';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $count = 0;
        Transaction::where('status', 0)->with(['application'])->chunk(100, function ($transactions) use (&$count){
            foreach ($transactions as $transaction)
            {
               if($transaction->application->exam_number === NULL){
                   $status = (new ConfirmUpperlinkPaygateTransactionRepository())->confirmTransaction($transaction->transactionId);
                   if(is_bool($status) && $status === true) {
                       $transaction->status = 1;

                       $transaction->update();

                       event(new CompleteApplicationEvent($transaction->application));
                       $count++;
                   }
                   sleep(3);
               }
            }
        });
        Storage::disk('local')->append('transactionLogs.txt', "$count transaction has been completed successfully - ". date('Y-m-d'));
        $this->info("$count transaction has been completed successfully");



        return Command::SUCCESS;
    }
}
