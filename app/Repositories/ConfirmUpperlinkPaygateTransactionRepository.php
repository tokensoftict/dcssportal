<?php

namespace App\Repositories;

use App\Models\Transaction;
use App\Models\UserActivity;
use Illuminate\Support\Facades\Http;

class ConfirmUpperlinkPaygateTransactionRepository
{
    public function __construct()
    {
        //
    }


    public function confirmTransaction($transactionRef)
    {
        $response =   Http::withBasicAuth("upperlinkintegration","Upperlink@2022gate")->get("https://thirdparty.paygate.upperlink.ng/api/v1/client/integration/transaction/query?merchantId=".env("MERCHANT_ID","UPLHSEM")."&ref=".$transactionRef);
        dd($response->body());
        $trans = Transaction::where('transactionId', $transactionRef)->first();

        if(!$trans){
            UserActivity::logActivities([
                'user_id' => auth()->user(),
                'description' => 'Unable to find Transaction id with ref '.$transactionRef,
            ]);
        }else{
            UserActivity::logActivities([
                'user_id' =>  $trans->application->user_id,
                'transaction_id' => $trans->id,
                'description' => 'Transaction Query was sent Upperlink Paygate',
                'response' => $response->body()
            ]);
        }

        $reponseCollection = $response->object();

        if(!isset($reponseCollection->transactionStatus)){
            return "Unable able to confirm transaction status";
        }

        if($reponseCollection->transactionStatus === "04") // processing
        {
            return "Transaction is currently in In-progress";
        }

        if($reponseCollection->transactionStatus === "02") // failed
        {
            return "Transaction failed, please try again";
        }

        if($reponseCollection->transactionStatus === "01") // pending
        {
            return "Transaction is currently pending";
        }

        if($reponseCollection->transactionStatus === "06") // pending
        {
            return "Transaction was declined";
        }

        if($reponseCollection->transactionStatus === "07") // pending
        {
            return "Transaction was cancelled by the user";
        }

        if($reponseCollection->transactionStatus === "00") // "00" for success
        {
            return true;
        }

        return "Unable able to confirm transaction status";

    }

}
