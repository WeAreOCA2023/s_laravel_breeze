<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class signupBossController extends Controller
{
    public function post(Request $request) {
        $param = [
            'signupCompanyName' => $request->signupCompanyName,
            'signupCompanyPostCode' => $request->signupCompanyPostCode,
            'signupCompanyAddress' => $request->signupCompanyAddress,
            'signupBossUserName' => $request->signupBossUserName,
            'signupBossFirstName' => $request->signupBossFirstName,
            'signupBossLastName' => $request->signupBossLastName,
            'signupBossEmail' => $request->signupBossEmail,
            'signupBossPassword' => $request->signupBossPassword,
        ];

        return redirect('/');
    }
}
