<?php

namespace App\Http\Controllers\Api\V1\Passport;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Recruitment\Master\Role;
use App\Models\Recruitment\Master\UserRole;
use App\Models\Recruitment\Master\Company;
use App\Models\OauthAccessToken;
use Illuminate\Mail\Mailer;
use Illuminate\Support\Facades\Mail;

class PassportAuthController extends Controller
{
    /**
     * Registration
     */
    public function register(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|min:8',
        ]);
 
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        // Mail::send('email',function($message) use($request){
        //     $message->to($request->email);
        //     $message->subject('Email Verification Mail');
        // });

        if($request->role_uuid) {
            $role = Role::where("uuid", $request->role_uuid)->first();
        } else {
            $role = Role::find(3); // default (Job Seeker)
        }
        if($role) {
            $ur = new UserRole;
            $ur->user_id = $user->id;
            $ur->role_id = $role->id;
            $ur->save();
        }

        if($request->company_uuid) {
            $company = Company::where("uuid", $request->company_uuid)->first();
            if($company) {
                $user->company_id = $company->id;
                $user->save();
            }
        }
       
        $token = $user->createToken('LaravelAuthApp')->accessToken;
        $resp = [
            "success" => true,
            "message" => "Success",
            "data" => [
                "token" => $token,
                "user" => [
                    "name" => $user->name,
                    "email" => $user->email
                ],
                "role" => [
                    "uuid" => $user->user_role->role->uuid,
                    "name" => $user->user_role->role->name,
                ],
                "company" => [ // karena bisa saja ada user yg tidak berelasi dengan company manapun. ex : joob seeker
                    "uuid" => ($user->company) ? $user->company->uuid : null,
                    "name" => ($user->company) ? $user->company->name : null,
                ]
            ],
        ];
 
        return response()->json($resp, 200);
    }
 
    /**
     * Login
     */
    public function login(Request $request)
    {
        $data = [
            'email' => $request->email,
            'password' => $request->password
        ];
 
        if (auth()->attempt($data)) {
            // jika hanya boleh 1 token per user, uncomment this line
            OauthAccessToken::where("user_id", auth()->user()->id)->delete();

            $token = auth()->user()->createToken('LaravelAuthApp')->accessToken;
            $resp = [
                "success" => true,
                "message" => "Success",
                "data" => [
                    "token" => $token,
                    "user" => [
                        "name" => auth()->user()->name,
                        "email" => auth()->user()->email
                    ],
                    "role" => [
                        "uuid" => auth()->user()->user_role->role->uuid,
                        "name" => auth()->user()->user_role->role->name,
                    ],
                    "company" => [ // karena bisa saja ada user yg tidak berelasi dengan company manapun. ex : joob seeker
                        "uuid" => (auth()->user()->company) ? auth()->user()->company->uuid : null,
                        "name" => (auth()->user()->company) ? auth()->user()->company->name : null,
                    ]
                ],
            ];
            $code = 200;
        } else {
            $resp = [
                "success" => false,
                "message" => "These credentials do not match our records",
                "data" => null,
            ];
            $code = 401;
        }
        return response()->json($resp, $code);
    }

    /**
     * Logout
     */
    public function logout(Request $request)
    {
        try {
            auth()->user()->token()->revoke();
            session()->flush();
            $this->responseOk();
        } catch(\Exception $e) {
            $this->responseFail($e);
        }
        return $this->sendResponse();
    }

    /**
     * User Info
     */
    public function user(Request $request)
    {
        // try {
            $data = [
                "token" => $request->bearerToken(),
                "user" => [
                    "name" => auth()->user()->name,
                    "email" => auth()->user()->email
                ],
                "role" => [
                    "uuid" => auth()->user()->user_role->role->uuid,
                    "name" => auth()->user()->user_role->role->name,
                ],
                "company" => [ // karena bisa saja ada user yg tidak berelasi dengan company manapun. ex : joob seeker
                    "uuid" => (auth()->user()->company) ? auth()->user()->company->uuid : null,
                    "name" => (auth()->user()->company) ? auth()->user()->company->name : null,
                ]
                ];
            $this->responseOk($data);
        // } catch(\Exception $e) {
        //     $this->responseFail($e);
        // }
        return $this->sendResponse();
    }

    public function verify(Request $request){
        $currentDate = date('Y-m-d H:i:s');
        $token = decrypt($request->token);
        
        $arr = explode('||', $token);
        dd($token, $arr);
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