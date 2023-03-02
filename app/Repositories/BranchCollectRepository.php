<?php

namespace App\Repositories;

use App\Models\Transaction;
use RicorocksDigitalAgency\Soap\Facades\Soap;

class BranchCollectRepository
{
    private String $bc_env =  'live'; //"test";
    private String $test_url = "https://www.branchcollect.com/branchcollect_test/pay/?wsdl";
    private String $live_url = "https://www.branchcollect.com/pay/?wsdl";

    private String $bc_wsdl_url = "";

    private int $transaction_cost = 0;

    public String $MerchantID = "";
    private String $MerchantCode = "DCSS";

    private String $InstallmentID = "1";

    private String $DevID = "UI-DMcXZbbUj9nr7kVC";

    private int $transaction_amount = 1300;

    private int $tranaction_cost = 700;

    private int $total_amount = 0;

    public function __construct()
    {
        $this->bc_wsdl_url = $this->bc_env == "test" ? $this->test_url : $this->live_url;
        $this->transaction_cost = $this->bc_env == "live" ? 700 : 500;
        $this->MerchantID =  $this->bc_env == "live" ? "118" : "137";
        $this->total_amount = (int) ($this->transaction_amount + $this->tranaction_cost);
    }


    /**
     * -------- Generate Transction ID --------
     *@return string
     *@param int $randStringLength - Limited Number of Characters
     */
    private function randomString($randStringLength)
    {
        $timestring = microtime();
        $secondsSinceEpoch = (integer) substr($timestring, strrpos($timestring, " "), 100);
        $microseconds = (double) $timestring;
        $seed = mt_rand(0, 1000000000) + 10000000 * $microseconds + $secondsSinceEpoch;
        mt_srand($seed);
        $randstring = "";
        for ($i = 0; $i < $randStringLength; $i++) {
            $randstring .= mt_rand(0, 9);
        }
        return($randstring);
    }


    public function generateTransaction(Transaction $transaction)
    {
        $customer_surname = (string) $transaction->surName;
        $customer_firstname = (string) $transaction->firstName;
        $customer_othernames = (string) $transaction->lastName;
        $customer_phone = (string) $transaction->phoneNumber;
        $customer_email = (string) $transaction->email;
        $customer_id = (string) $transaction->application->id;
        $split = 'false';
        $transactionid= "3061" . $this->randomString(8);
        $salt = "$this->DevID|$this->MerchantID|$this->MerchantCode|$transactionid";
        $MAC = hash('sha512', $salt);
        $collectionBankID= (string) "10";
        $bankID = (string) "10";
        $customFieldLabel = "COMMAND SECONDARY SCHOOL ADMISSION";
        $customFieldValue = date("Y", time());
        $ItemDescription = "COMMAND SECONDARY SCHOOL ADMISSION";
        $itemCode = "DCSS01";

        $transaction_cost = (int) $this->tranaction_cost;
        $company_amount = (int) ($this->total_amount - $this->tranaction_cost);

        $update_url = "https://dcss.sch.ng/update/url/".$transaction->application_id."/".$transactionid;

        $update_third_party_url = "https://dcss.sch.ng/update/thirdpartyurl/".$transaction->application_id."/".$transactionid;

        //$update_url = route("update.branchcollect_callback",[$transaction->application_id,$transactionid]);

        //$update_third_party_url = route("update.branchcollect_transaction_hook_thirdparty",[$transaction->application_id,$transactionid]);


        /**** Accounts Details ******/
        $first_benefiary_account_id = (string) ($this->bc_env == "live" ? "729" : "541"); //Mathematics Laboratory
        $first_benefiary_account_name = (string) ($this->bc_env == "live" ? "DIRECTORATE OF COMMAND SECONDARY SCHOOLS" : "DCSS");
        $first_benefiary_account_no = (string) ($this->bc_env == "live" ? "5030065286" : "0000000001");
        $first_benefiary_share = (string) "1500";


        $second_benefiary_account_id = (string) ($this->bc_env == "live" ? "730" : "542");
        $second_benefiary_account_name = (string) ($this->bc_env == "live" ? "UPPERLINK LIMITED" : "Upperlink Limited");
        $second_benefiary_account_no = (string) "4010518028";
        $second_benefiary_share = (string) ($this->bc_env == "live" ? "400" : "400");

        $third_benefiary_account_id = (string) ($this->bc_env == "live" ? "731" : "543");
        $third_benefiary_account_name = (string) ($this->bc_env == "live" ? "FIDELITY BANK" : "Fidelity Bank Collection Account");
        $third_benefiary_account_no = (string) ($this->bc_env == "live" ? "CMF11052301002" : "CMF11052301001");
        $third_benefiary_share = (string) "100";

        //get WSDL xml structure
        $xml = file_get_contents(storage_path("app/branchcollect/branch-collect.xml"));

        //set xml body
        $var = array("{DevID}",
            "{MerchantID}",
            "{MerchantCode}",
            "{transactionid}",
            "{MAC}",
            "{total_amount}",
            "{customer_id}",
            "{customer_surname}",
            "{customer_firstname}",
            "{customer_othernames}",
            "{customer_email}",
            "{customer_phone}",
            "{update_url}",
            "{update_url_third_party}",
            "{ItemDescription}",
            "{InstallmentID}",
            "{itemCode}",
            "{payment_amount}",
            "{transaction_cost}",
            "{custom_field_label}",
            "{custom_field_label_value}",
            "{collectionBankID}",
            "{bank_id}",
            "{first_beneficiary_account_id}",
            "{first_beneficiary_account_name}",
            "{first_beneficiary_account_number}",
            "{first_beneficiary_share}",
            "{second_beneficiary_account_id}",
            "{second_beneficiary_account_name}",
            "{second_beneficiary_account_number}",
            "{second_beneficiary_share}",
            "{third_beneficiary_account_id}",
            "{third_beneficiary_account_name}",
            "{third_beneficiary_account_number}",
            "{third_beneficiary_share}");

        //set xml values
        $values = array($this->DevID, $this->MerchantID, $this->MerchantCode, $transactionid, $MAC, $this->total_amount, $customer_id,
            $customer_surname, $customer_firstname, $customer_othernames, $customer_email, $customer_phone,
            $update_url, $update_third_party_url, $ItemDescription, $this->InstallmentID, $itemCode, $company_amount,
            $transaction_cost, $customFieldLabel, $customFieldValue, $collectionBankID, $bankID,
            $first_benefiary_account_id, $first_benefiary_account_name, $first_benefiary_account_no, $first_benefiary_share,
            $second_benefiary_account_id, $second_benefiary_account_name, $second_benefiary_account_no, $second_benefiary_share,
            $third_benefiary_account_id, $third_benefiary_account_name, $third_benefiary_account_no, $third_benefiary_share);

        $xml = str_replace($var, $values, $xml);

        $response = Soap::to($this->bc_wsdl_url)->GenerateTransactionTP($xml)->response;

        app('log')->info($transaction->id."-".$transaction->email."-->".$response);

        $service_response = simplexml_load_string($response); //response from service

        if($service_response && $service_response->RespCode == "00")
        {
            return  ['transaction_id'=> $transactionid, "callback_url" => $update_third_party_url ];
        }

        return false;
    }


    public function requeryTransaction(Transaction $transaction)
    {
        $salt = "$this->MerchantID|$this->MerchantCode|$transaction->transactionId";

        $MAC = hash('sha512', $salt);

        $xml = file_get_contents(storage_path("app/branchcollect/requery-branch-collect.xml"));

        $var = array("{MerchantID}", "{MerchantCode}", "{TransactionID}", "{MAC}");

        $values = array($this->MerchantID, $this->MerchantCode, $transaction->transactionId, $MAC);

        $xml = str_replace($var, $values, $xml);

        $response = Soap::to($this->bc_wsdl_url)->PaidTransactionDetails($xml)->response;

        app('log')->info('Re-query Transaction ---'.$transaction->id."-".$transaction->email."-->".$response);

        $service_response = simplexml_load_string($response); //response from service

        if($service_response && $service_response->RespCode == "00"){

            return true;
        }
        else {
            return "Invalid or pending transaction, please try again.";
        }

    }
}
