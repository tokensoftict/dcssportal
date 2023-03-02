<?php

namespace App\Http\Controllers;

use App\Events\CompleteApplicationEvent;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegistrationRequest;
use App\Models\Application;
use App\Models\Session;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view("home");
    }


    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */

    public function login()
    {
        return view("login");
    }


    public function register()
    {
        $session = Session::where('status',1)->first();

        $application = new Application();

        return view("register",['session' => $session, 'application'=> $application]);
    }

    /**
     * @param RegistrationRequest $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */

    public function registerprocess(RegistrationRequest $request)
    {

        $request->request->set('password',bcrypt($request->get('password')));

        $data = $request->only(RegistrationRequest::$fields);

        $user =  User::create($data);

        event(new Registered($user));

        auth()->login($user);

        return redirect("account.dashboard")->with('success', "Account has been successfully registered.");
    }


    public function loginprocess(LoginRequest $request)
    {

        $credentials = $request->only(LoginRequest::$fields);

        if(auth()->attempt($credentials))
        {
            if(auth()->user()->isAdmin()) {

                return redirect()->route('administrator.index')->with('success','Login Successful');
            }
            return redirect()->route('account.dashboard')->with('success','Login Successful');
        }

        return redirect()->route("login")->with('error','Oppps! You have entered invalid credentials');
    }


    public function news()
    {
        return view("news");
    }

    public function contact()
    {
        return view("contact");
    }



    public function branchcollect_callback(Application $application, $transaction)
    {
        if(!$application) return "Invalid Application id sent";

        if(!$transaction) return "Invalid transaction id";

        $transaction = Transaction::where("transactionId",$transaction)->first();

        if(!$transaction) return "Invalid transaction id";


        $final_rcd =  request()->get("final_rcd")  ? request()->get("final_rcd") : 0;
        $transact_no=   request()->get("transact_no")  ? request()->get("transact_no") : 0;   // transaction id
        $rcd =  request()->get("rcd")  ? request()->get("rcd") : 0;  //response code
        $bc_url =  request()->get("bc_url")  ? request()->get("bc_url") : 0;  // BranchCollect redirect url

        if ($final_rcd == "100") {
            $transaction->status = "1";
            $transaction->update();

            if($application->exam_number === NULL) {

                event(new CompleteApplicationEvent($application));
            }

            $client_resp = 1; //Successful

            return  redirect("$bc_url?transact_no=$transact_no&rcd=$rcd&final_rcd=$final_rcd&client_resp=$client_resp")->refresh();

        }

        $client_resp = 0; //Successful
        return redirect("$bc_url?transact_no=$transact_no&rcd=$rcd&final_rcd=$final_rcd&client_resp=$client_resp")->refresh();

    }

    public function branchcollect_callback_thirldparty($application, $transaction)
    {

        if (!$application) return "1";

        if (!$transaction) return "1";

        $application = Application::find($application);

        $transaction = Transaction::where("transactionId", $transaction)->first();

        if (!$transaction) return "1";

        $final_rcd = request()->get("final_rcd") ? request()->get("final_rcd") : 0;

        if ($final_rcd == "100") {

            $transaction->status = "1";
            $transaction->update();

            if($application->exam_number === NULL) {

                event(new CompleteApplicationEvent($application));
            }


            return "1";

        }

        return "1";
    }

}
