<?php

namespace App\Http\Controllers\TestDeveloper;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Mail;
use App\Mail\Information;
use App\Models\User;

class TestController extends Controller
{
    public function sendEmail(Request $request) {
        $date = date('Y-m-d H:i:s');

        $currentDate = strtotime($date);
        $futureDate = $currentDate+(60*5);
        $formatDate = date("Y-m-d H:i:s", $futureDate);

        $to = $request->to;
        $user = User::where('email',$to)->firstOrFail();
        $token = encrypt($user->id.'||'.$formatDate);
        $resp = Mail::to($to)->send(new Information("content", "subject", $token));
        dd($to, $resp);
    }
}
