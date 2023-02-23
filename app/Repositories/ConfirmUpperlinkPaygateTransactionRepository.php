<?php

namespace App\Repositories;

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

      $reponseCollection = $response->object();


        if(!isset($reponseCollection->transactionStatus)){
            return "Unable able to confirm transaction status";
        }

      if($reponseCollection->transactionStatus === "00") // "02" for failed
      {
        return true;
      }
      else {
          return $reponseCollection->errorReason;
      }

    }

}
