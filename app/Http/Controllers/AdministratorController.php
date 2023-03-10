<?php

namespace App\Http\Controllers;

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

        if($request->get('email'))
        {
            $user = User::where('email',$request->get('email'))->first();

            $data['user'] = $user;

            $data['application'] = $user->applications->first();
        }

        return view('account.administrator.view_application', $data);
    }



}
