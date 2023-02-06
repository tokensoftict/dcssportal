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

      $response =   Http::withBasicAuth("upperlinkintegration","Upperlink@2022gate")->get("https://devthirdparty.paygate.upperlink.ng/api/v1/client/integration/transaction/query?merchantId=".env("MERCHANT_ID","UPLADMINMERCH")."&ref=".$transactionRef);

      $reponseCollection = $response->object();

      if($reponseCollection->transactionStatus === "02") // "00"
      {
        return true;
      }
      else {
          return $reponseCollection->errorReason;
      }

    }

}
