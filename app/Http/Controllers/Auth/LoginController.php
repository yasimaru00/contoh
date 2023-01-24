<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use App\Models\OauthAccessToken;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // 
    }
    
    public function showLoginForm(){
      $pageConfigs = [
          'bodyClass' => "bg-full-screen-image",
          'blankPage' => true
      ];
 
      return view('/auth/login', [
          'pageConfigs' => $pageConfigs
      ]);
    }

    public function login(Request $request){
        $data = [
            'email' => $request->email,
            'password' => $request->password
        ];
 
        if (auth()->attempt($data)) {
            // jika hanya boleh 1 token per user, uncomment this line
            OauthAccessToken::where("user_id", auth()->user()->id)->delete();
            $token = auth()->user()->createToken('LaravelAuthApp')->accessToken;
            
            session([
                "user_name" => auth()->user()->name,
                "role_uuid" => auth()->user()->user_role->role->uuid,
                "role_name" => auth()->user()->user_role->role->name,
                "company_uuid" => (auth()->user()->company) ? auth()->user()->company->uuid : null,
                "company_name" => (auth()->user()->company) ? auth()->user()->company->name : null
            ]);

            return view("auth/pinpoint", [ "token" => $token]);
        } else {
            return redirect()->back()->with('error', 'These credentials do not match our records');  
        }
    }

    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        return $this->loggedOut($request) ?: redirect('/login');
    }
}
