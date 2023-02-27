<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Gregwar\Captcha\CaptchaBuilder;
use Illuminate\Support\Facades\Session;
use App\CentralLogics\Helpers;

// ---
use Illuminate\Support\Facades\DB;
use Mail;
use Illuminate\Support\Str;

// model
use App\Models\Admin;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin', ['except' => 'logout']);
    }
    
    /* --------------- forget password ------------*/
    public function fgpass()
    {
        return view('admin-views.auth.fgpass');
    }
    
    public function fgpass_submit(Request $request)
    {
        $user = Admin::whereEmail($request->email)->first();
        
        if($user)
        {
            $data = [];
            $data['email'] = $user->email;
            $data['token'] = Str::uuid();
            $data['created_at'] = now();
            
            DB::table('password_resets')->insert($data);
            
            $data['name'] = $user->f_name;
            $data['type'] = 'admins';
            
            Mail::send('email-templates.admin-password-reset', $data, function ($mail) use($data)
            {
                /**
                 *  Note 1: first $data is for mail view page.
                 *  Note 2: second $data is for closure method's parameter. mail param.
                */
            
                $mail->from('support@ghwo.org', 'ghwo.org'); // $mailFrom, $sender
                $mail->to($data['email'], $data['name']);
                $mail->subject('Password Reset');
            });
            
            
            // Mail::to($email)->send(new \App\Mail\PasswordResetMail($email, $token));
            
            return redirect()->back()->with('message', "Password reset link sent to your email.");
        }
        
        return redirect()->back()->withInput($request->only('email', 'remember'))->withErrors(['Credentials does not match.']);
    }
    
    public function reset_pass($token = null)
    {
        if(!$token){
            return redirect()->route('admin.auth.login');
        }
        
        $main_token = $token;
        $token = explode('/', base64_decode($token));
        
        $email = $token[0];
        $token = $token[1];
        
        $pr = DB::table('password_resets')->where([
            'email' => $email,
            'token' => $token,
        ])->first();
        
        if ($pr){
            return view('admin-views.auth.reset-password', ['token' => $main_token]);
        }
        else{
            return redirect()->route('admin.auth.fgpass')->with('message', "Credentials does not match.");
        }
    }
    
    public function new_pass(Request $request)
    {
        $main_token = explode('/', base64_decode($request->token)); // string to array
        
        $email = $main_token[0];
        $token = $main_token[1];
        $type = $main_token[2];
        
        $pr = DB::table('password_resets')->where([
            'email' => $email,
            'token' => $token,
        ])->first();
        
        if ($pr) {
            if ($request->password == $request->confirm_password) 
            {
                $table = $type;
                DB::table($table)->where('email', $email)->update([
                    'password' => bcrypt($request->confirm_password)
                ]);
                
                $pr = DB::table('password_resets')->where([
                    'email' => $email,
                    'token' => $token,
                ])->delete();
                
               // return redirect('https://dev.ghwo.org/sign-in?page=/main')->with('message', "Password updated");
            }
            else{
                $data = [];
                $data['message'] = session()->flash('message', "Password did not matched.");
                $data['token'] = $request->token;
                
                return view('admin-views.auth.reset-password', $data);
            }
        }
        else{
            return redirect()->route('admin.auth.fgpass')->with('message', "Credentials does not match.");
        }
        
        
    }
    
    
    /* --------------- forget password ------------*/
    
    
    
    
    
    

    public function login()
    {
        $custome_recaptcha = new CaptchaBuilder;
        $custome_recaptcha->build();
        Session::put('six_captcha', $custome_recaptcha->getPhrase());
        return view('admin-views.auth.login', compact('custome_recaptcha'));
    }

    public function submit(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        $recaptcha = Helpers::get_business_settings('recaptcha');
        if (isset($recaptcha) && $recaptcha['status'] == 1) {
            $request->validate([
                'g-recaptcha-response' => [
                    function ($attribute, $value, $fail) {
                        $secret_key = Helpers::get_business_settings('recaptcha')['secret_key'];
                        $response = $value;
                        $url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . $secret_key . '&response=' . $response;
                        $response = \file_get_contents($url);
                        $response = json_decode($response);
                        if (!$response->success) {
                            $fail(translate('messages.ReCAPTCHA Failed'));
                        }
                    },
                ],
            ]);
        } else if(strtolower(session('six_captcha')) != strtolower($request->custome_recaptcha))
        {
            Toastr::error(translate('messages.ReCAPTCHA Failed'));
            return back();
        }

        if (auth('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
            return redirect()->route('admin.dashboard');
        }

        return redirect()->back()->withInput($request->only('email', 'remember'))
            ->withErrors(['Credentials does not match.']);
    }

    public function logout(Request $request)
    {
        auth()->guard('admin')->logout();
        return redirect()->route('admin.auth.login');
    }
}
