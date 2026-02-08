<?php

namespace App\Http\Controllers;

use App\Events\CompleteApplicationEvent;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegistrationRequest;
use App\Models\Application;
use App\Models\Session;
use App\Models\Transaction;
use App\Models\User;
use App\Services\EmailApiService;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Events\Verified;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;

class HomeController extends Controller
{

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $session = Session::where('status',1)->first();

        return view("home", compact('session'));
    }


    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */

    public function login()
    {
        $session = Session::where('status',1)->first();

        return view("login", compact('session'));
    }

    public function forgetPassword()
    {
        $session = Session::where('status',1)->first();

        return view("forgotpassword", compact('session'));
    }

    public function sendResetLinkEmail(Request $request)
    {
        // Validate email
        $request->validate([
            'email' => 'required|email'
        ]);

        // Find user (do not reveal existence)
        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return back()->with('status',
                'If the email address exists, a password reset link has been sent.'
            );
        }

        // Create reset token
        $token = Password::createToken($user);

        // Reset link
        $resetUrl = url(route('password.reset', [
            'token' => $token,
            'email' => $user->email
        ], false));

        // Send email via API
        app(EmailApiService::class)->send([
            'to' => [
                'email' => $user->email,
                'name' => $user->firstname
            ],
            'subject' => 'Reset Your Password',
            'htmlbody' => "
                <p>Hello {$user->firstname},</p>
                <p>You requested to reset your password.</p>
                <p>
                    <a href='{$resetUrl}' 
                       style='display:inline-block;padding:10px 20px;
                              background:#2563eb;color:#fff;
                              text-decoration:none;border-radius:4px'>
                        Reset Password
                    </a>
                </p>
                <p>If you did not request this, please ignore this email.</p>
            "
        ]);

        return back()->with('status',
            'If the email address exists, a password reset link has been sent.'
        );
    }

    public function showResetForm(Request $request, $token = null)
    {
        $session = Session::where('status',1)->first();

        return view('auth.passwords.reset', [
            'token' => $token,
            'email' => $request->email,
            'session' => $session
        ]);

    }

    public function restPassword(Request $request)
    {
        // Validate input
        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:6',
        ]);

        // Attempt password reset
        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user, $password) {

                $user->forceFill([
                    'password' => Hash::make($password),
                    'remember_token' => Str::random(60),
                ])->save();

                 event(new PasswordReset($user));
            }
        );

        // Handle response
        return $status === Password::PASSWORD_RESET
            ? redirect()->route('login')->with('error', __('Your password has been reset successfully.'))
            : back()->withErrors(['email' => __($status)]);
    }

    public function emailVerification()
    {
        $session = Session::where('status',1)->first();

        return view("auth.verify", compact('session'));
    }


    public function resend(Request $request)
    {
        $user = $request->user();

        if ($user->hasVerifiedEmail()) {

            if($request->user()->isAdmin() || $request->user()->isDcssAdmin() || $request->user()->isUpperlinkAdmin()) {

                return redirect()->route('administrator.index')->with('success','Login Successful');
            }

            return redirect()->route('account.dashboard')->with('success','Login Successful');
        }

        // Send verification email using your API
        $user->sendEmailVerificationNotification();

        return back()->with('status', 'verification-link-sent');
    }

    public function verifyEmailAddress(Request $request, $id, $hash)
    {
        $user = User::findOrFail($id);

        if(!$user) {
            abort(403);
        }


        if (! hash_equals((string) $hash, sha1($user->getEmailForVerification()))) {
            abort(403);
        }

        if($user->hasVerifiedEmail()) {
           return redirect()->route("login")->with('error', "Your account is already verified.");
        }


        $user->markEmailAsVerified();

        auth()->logout();

        event(new Verified($user));
        $session = Session::where('status',1)->first();
        return view("auth.verify_success", compact('user', 'session'));
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
            if(auth()->user()->isAdmin() || auth()->user()->isDcssAdmin() || auth()->user()->isUpperlinkAdmin()) {

                return redirect()->route('administrator.index')->with('success','Login Successful');
            }
            return redirect()->route('account.dashboard')->with('success','Login Successful');
        }

        return redirect()->route("login")->with('error','Oppps! You have entered an invalid credentials');
    }

    public function news()
    {
        $session = Session::where('status',1)->first();

        return view("news", compact('session'));
    }

    public function howtoapply()
    {
        $session = Session::where('status',1)->first();

        return view("howtoapply", compact('session'));
    }

    public function contact()
    {
        $session = Session::where('status',1)->first();

        return view("contact", compact('session'));
    }

    public function candidates()
    {
        $session = Session::where('status',1)->first();

        $files = scandir(public_path('results'));

        $cdss = [];
        $css = [];
        $csss = [];

        foreach ($files as $filename) {
            $file_url = asset('results')."/" . $filename;
            if (preg_match('~\.pdf$~', $filename)) {
                $filename = str_replace('.pdf', '', $filename);

                if(str_starts_with($filename, 'CSS')){
                    $css[] = [
                        'name' => str_replace('CSS', 'COMMAND SECONDARY SCHOOL ', $filename),
                        'url' => $file_url
                    ];
                }

                if(str_starts_with($filename, '-CSSS')){
                    $csss[] = [
                        'name' => str_replace('-CSSS', 'COMMAND SCIENCE SECONDARY SCHOOL ', $filename),
                        'url' => $file_url
                    ];
                }

                if(str_starts_with($filename, 'CSTSS')){
                    $csss[] = [
                        'name' => str_replace('CSTSS', 'COMMAND SCIENCE AND TECHNICAL SECONDARY SCHOOL ', $filename),
                        'url' => $file_url
                    ];
                }

                if(str_starts_with($filename, 'CDSS')) {
                    $cdss[] = [
                        'name' =>  str_replace('CDSS', 'COMMAND DAY SECONDARY SCHOOL ', $filename),
                        'url' => $file_url
                    ];
                }


                if(str_starts_with($filename, 'SUP CDSS')) {
                    $cdss[] = [
                        'name' =>  str_replace('SUP CDSS', 'SUPPLEMENTARY COMMAND DAY SECONDARY SCHOOL ', $filename),
                        'url' => $file_url
                    ];
                }


                if(str_starts_with($filename, 'SUP CSS')){
                    $css[] = [
                        'name' => str_replace('SUP CSS', 'SUPPLEMENTARY COMMAND SECONDARY SCHOOL ', $filename),
                        'url' => $file_url
                    ];
                }

                if(str_starts_with($filename, 'SUP -CSSS')){
                    $csss[] = [
                        'name' => str_replace('SUP -CSSS', 'SUPPLEMENTARY COMMAND SCIENCE SECONDARY SCHOOL ', $filename),
                        'url' => $file_url
                    ];
                }

                if(str_starts_with($filename, 'SUP CSTSS')){
                    $csss[] = [
                        'name' => str_replace('SUP CSTSS', 'SUPPLEMENTARY COMMAND SCIENCE AND TECHNICAL SECONDARY SCHOOL ', $filename),
                        'url' => $file_url
                    ];
                }




            }
        }

        return view("candidates", compact('session', 'cdss', 'css', 'csss'));
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

    public function interview_status()
    {
        $session = Session::where('status',1)->first();

        return view("successful_candidate_interview", compact("session"));
    }

}
