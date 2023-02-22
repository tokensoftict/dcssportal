<?php

namespace App\Http\Controllers;

use App\Events\CompleteApplicationEvent;
use App\Models\Application;
use App\Models\Session;
use App\Models\Transaction;
use App\Repositories\ConfirmUpperlinkPaygateTransactionRepository;
use Illuminate\Http\Request;
use PDF;
Use Alert;

ini_set('memory_limit', '5M');

class AccountController extends Controller
{

    protected ConfirmUpperlinkPaygateTransactionRepository $confirmUpperlinkPaygateTransaction;


    public function __construct(ConfirmUpperlinkPaygateTransactionRepository $confirmUpperlinkPaygateTransaction)
    {
        $this->confirmUpperlinkPaygateTransaction = $confirmUpperlinkPaygateTransaction;
    }

    public function index()
    {
        $application = Application::where("user_id",auth()->user()->id)->first();

        return view('account.home',['application' => $application]);
    }


    public function make_payment(Application $application)
    {
        return view('account.make_payment', ['application'=>$application]);
    }

    public function complete_application(Application $application, Request $request)
    {

        if(!isset($application->id))
        {
            Alert::error('Payment Confirmation', "Unable to determine application / Invalid Application ID");
            if(auth()->user()->isAdmin()){
                return redirect()->route('administrator.index');
            }else {
                return redirect()->route('account.dashboard');
            }
        }

        if(!$request->get("reference"))
        {
            Alert::error('Payment Confirmation', "Invalid Transaction ID Supply");
            if(auth()->user()->isAdmin()){
                return redirect()->route('administrator.index');
            }else {
                return redirect()->route('account.dashboard');
            }
        }


        $transaction = Transaction::where('transactionId',$request->get("reference"))->first();

        if(!$transaction)
        {
            Alert::error('Payment Confirmation', "Transaction not found");
            if(auth()->user()->isAdmin()){
                return redirect()->route('administrator.index');
            }else {
                return redirect()->route('account.dashboard');
            }
        }


        if($application->id !== $transaction->application_id)
        {
            Alert::error('Payment Confirmation', "Transaction not found");
            if(auth()->user()->isAdmin()){
                return redirect()->route('administrator.index');
            }else {
                return redirect()->route('account.dashboard');
            }
        }


        $confirm = $this->confirmUpperlinkPaygateTransaction->confirmTransaction($request->get("reference"));

        if(!is_bool($confirm))
        {
            Alert::error('Payment Confirmation Error', $confirm);
            return redirect()->route('account.make_payment',$transaction->application_id)->with("error",$confirm);
        }



        $transaction->status = "1";
        $transaction->update();

        if($application->exam_number !== NULL) {
            Alert::success('Payment Confirmation', "Application has been completed, successfully");
            return redirect()->route('account.make_payment',$transaction->application_id)->with("success", "Application has been completed, successfully");
        }

        event(new CompleteApplicationEvent($application));

        Alert::success('Payment Confirmation', "Application has been completed, successfully");
        return redirect()->route('account.make_payment',$application->id)->with("success","Application has been completed, successfully");
    }


    public function download_photocard(Application $application)
    {

        $session = Session::where("status",1)->first();

        $pdf = PDF::loadView("photocard.print",['application'=>$application, "session"=> $session]);

        return $pdf->stream('photocard.pdf');
    }


    public function download_payment_receipt(Application $application)
    {

        $transaction = Transaction::where('application_id',$application->id)->where("status",1)->first();

        if(!$transaction) abort("404");

        $session = Session::where("status",1)->first();

        $pdf = PDF::loadView("reciept.payment",['payment' => $transaction, "session"=> $session]);

        return $pdf->stream('payment.pdf');
    }


    public function print_photocard(Application $application)
    {
        return view('account.print_photocard', ['application'=>$application]);
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route("index")->with("success","Logout was successful");
    }


    public function download_payment_slip(Transaction $transaction)
    {


        if(!$transaction) abort("404");

        $session = Session::where("status",1)->first();

        $pdf = PDF::loadView("reciept.payment_slip",['payment' => $transaction, "session"=> $session]);

        return $pdf->stream('payment_slip.pdf');
    }


    public function profile()
    {

    }
}
