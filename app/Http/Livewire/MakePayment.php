<?php

namespace App\Http\Livewire;

use App\Models\Application;
use App\Models\Session;
use App\Models\Transaction;
use App\Repositories\BranchCollectRepository;
use Illuminate\Support\Arr;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class MakePayment extends Component
{

   use LivewireAlert;

    public Application $application;

    public Session $session;

    public Transaction $transaction;

    public string $paymentGateWay ="INTERSWITCH-PAYMENTGATEWAY";

    public string $paymentSlipUrl = "";

    private BranchCollectRepository $branchCollectRepository;


    public function boot(BranchCollectRepository $branchCollectRepository)
    {
        $this->branchCollectRepository = $branchCollectRepository;
    }

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
        if($this->paymentGateWay === "UPPERLINKPAYGATE")
        {
            $this->generateUpperlinkPayGateTransactionDetails();
        }

        if($this->paymentGateWay === "INTERSWITCH-PAYMENTGATEWAY")
        {
            $this->generateInterSwitchPaymentGateWayTransactionDetails();
        }
    }


    private function generateInterSwitchPaymentGateWayTransactionDetails()
    {
        $checkTransaction = Transaction::where("application_id",$this->application->id)
            ->where("gateway","INTERSWITCH-PAYMENTGATEWAY")->first();

        if(!$checkTransaction) {
            $id = time() . mt_rand(0, 10000000);

            $this->transaction = Transaction::create(
                [
                    "application_id" => $this->application->id,
                    "transactionId" => $id,
                    "amount" => $this->session->form_fee,
                    "currency" => "NGN",
                    "country" => "NG",
                    "email" => $this->application->email,
                    "gateway" => "UPPERLINKPAYGATE",
                    "phoneNumber" => $this->application->telephone,
                    "surName" => $this->application->surname,
                    "firstName" => $this->application->firstname,
                    "lastName" => $this->application->othernames,
                    "customerUrl" => route("account.complete_application", $this->application->id),
                    "merchantId" => env("MERCHANT_ID", "UPLADMINMERCH"),
                ]
            );

            $response = $this->branchCollectRepository->generateTransaction($this->transaction);

            if ($response === false) {
                $this->transaction->delete();
                $this->alert("error",
                    "Payment Response",
                    [
                        'position' => 'center',
                        'timer' => 3000,
                        'toast' => false,
                        'text' =>  "Unable to connect to payment gateway, please try again.",
                    ]
                );
                $this->dispatchBrowserEvent("errorGeneratingTransaction", ["message" => "Unable to connect to payment gateway, please try again."]);
            }

            if (is_array($response)) {
                $this->transaction->transactionId = $response['transaction_id'];
                $this->transaction->customerUrl = $response["callback_url"];
                $this->transaction->merchantId = $this->branchCollectRepository->MerchantID;
                $this->transaction->gateway = "INTERSWITCH-PAYMENTGATEWAY";
                $this->transaction->update();
                $this->alert(
                    "success",
                    "Payment Response",
                    [
                        'position' => 'center',
                        'timer' => 3000,
                        'toast' => false,
                        'text' =>  "Transaction has been generated successfully, Please Download payment Slip",
                    ]
                );
                $this->paymentSlipUrl = route("account.download_payment_slip",$this->transaction->id);

                $this->dispatchBrowserEvent("successGeneratingTransaction", ["body" => $this->transaction->toArray()]);

            }

        }
        else {
            $this->alert(
                "success",
                "Payment Response",
                [
                    'position' => 'center',
                    'timer' => 3000,
                    'toast' => false,
                    'text' =>  "Transaction has been generated successfully, Please Download payment Slip",
                ]
            );

            $this->paymentSlipUrl = route("account.download_payment_slip",$checkTransaction->id);

            $this->dispatchBrowserEvent("successGeneratingTransaction",["body"=>$checkTransaction->toArray()]);

        }
    }

    private function generateUpperlinkPayGateTransactionDetails()
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
                "gateway" => "UPPERLINKPAYGATE",
                "phoneNumber" => $this->application->telephone,
                "surName" => $this->application->surname,
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
