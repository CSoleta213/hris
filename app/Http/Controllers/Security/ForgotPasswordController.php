<?php

namespace App\Http\Controllers\Security;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ForgotPasswordController extends Controller
{
    public function forgot() {
        return view('security.forgot');    
    }

    public function password(Request $request) {
        dd($request->all());
    }
}
