<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegistrationRequest;
use App\Models\Session;
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

        return view("register",['session' => $session]);
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
}
