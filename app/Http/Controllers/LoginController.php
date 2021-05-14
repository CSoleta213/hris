<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class LoginController extends Controller
{
    function login(Request $req)
    {
        $email = $req->input('email');
        $password = $req->input('password');

        $checkLogin = DB::table('admins')->where(['email'=>$email,'password'=>$password])->get();
        if(count($checkLogin) > 0)
        {
            $data = $req->input();
            $req->session()->put('email',$data['email']);
            return redirect('dashboard');
        } else {
            return view('email-and-password-not-matched');
        }
    }

    function loginAsAdmin(Request $req)
    {
        $email = $req->input('email');
        $password = $req->input('password');

        $checkLogin = DB::table('admins')->where(['email'=>$email,'password'=>$password])->get();
        if(count($checkLogin) > 0)
        {
            $data = $req->input();
            $req->session()->put('email',$data['email']);
            return redirect('/admin/dashboard');
        } else {
            return view('email-and-password-not-matched');
        }
    }
}
