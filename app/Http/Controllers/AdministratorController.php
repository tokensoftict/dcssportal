<?php

namespace App\Http\Controllers;

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
        return view('account.administrator.reports');
    }
}
