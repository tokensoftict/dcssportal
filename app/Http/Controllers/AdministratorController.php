<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;

class AdministratorController extends Controller
{
    public function index()
    {
        return view('account.administrator.dashboard');
    }

    public function new_application()
    {
        return view('account.administrator.newapplication');
    }

    public function myapplication()
    {
        return view('account.administrator.myapplication');
    }


    public function reports()
    {
        $data = ['filter'=>['status','centers','schools']];
        return view('account.administrator.reports',$data);
    }

    public function reports_by_center()
    {
        $data = ['filter'=>['centers']];
        return view('account.administrator.reports_by_center',$data);
    }

    public function reports_by_school()
    {
        $data = ['filter'=>['schools']];
        return view('account.administrator.reports_by_school',$data);
    }

    public function reports_by_status()
    {
        $data = ['filter'=>['status']];
        return view('account.administrator.reports_by_status',$data);
    }

    public function view_application(Request $request)
    {
        $data = [];

        if($request->get('email') && !is_numeric($request->get('email')))
        {
            $user = User::where('email',$request->get('email'))->first();

            $data['user'] = $user;

            $data['application'] = $user->applications->first();
        }

        if($request->get('email') && is_numeric($request->get('email')))
        {
            $transaction_id = Transaction::where('transactionId', $request->get('email'))->first();

            if(!$transaction_id) return  redirect()->back();

            $data['application'] = Application::findorfail($transaction_id->application_id);

            $data['user'] = User::findorfail( $data['application']->user_id);
        }


        return view('account.administrator.view_application', $data);
    }



}
