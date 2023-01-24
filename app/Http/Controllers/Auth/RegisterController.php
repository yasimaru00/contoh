<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Controllers\Controller;
use App\Mail\Information;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /** 
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
      return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        // $user->markEmailAsVerified();
        // return $user;

    
    }

    // Register
    public function showRegistrationForm(Request $request){
      $pageConfigs = [
          'bodyClass' => "bg-full-screen-image",
          'blankPage' => true
      ];

      $redirectUrl = url('auth/login');
      if($request->redirect_url) {
        $redirectUrl = $request->redirect_url;
      }

      return view('/auth/register', [
          'pageConfigs' => $pageConfigs,
          'redirectUrl' => $redirectUrl,
      ]);
    }

    public function sendEmail(){
        $date = date('Y-m-d H:i:s');

        $currentDate = strtotime($date);
        $futureDate = $currentDate+(60*5);
        $formatDate = date("Y-m-d H:i:s", $futureDate);

        $to = $request->to;
        $user = User::where('email',$to)->firstOrFail();
        $token = encrypt($user->id.'||'.$formatDate);
        $resp = Mail::to($to)->send(new Information("content", "subject", $token));
        // dd($to, $resp);
        
    }

    public function verify(Request $request){
        $currentDate = date('Y-m-d H:i:s');
        $token = decrypt($request->token);
        
        $arr = explode('||', $token);
        // dd($token, $arr);
        $user = User::findOrFail($arr[0]);
        $tokenDate = $arr[1];

        if($tokenDate >= $currentDate ){
            $user->email_verified_at = $currentDate;
            $user->save();
            $this->responseOk();
        }else{
            $this->responseBadReq();
        }
        return $this->sendResponse();
    }
}
