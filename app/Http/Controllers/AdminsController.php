<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class AdminsController extends Controller
{
    //
    function addAsAdmin(Request $req)
    {
        //print_r($req->input());
        $user = new Admin;
        $user->lastname = $req->lastname;
        $user->firstname = $req->firstname;
        $user->middlename = $req->middlename;
        $user->email = $req->email;
        $user->password = $req->password;
        $user->save();
        return view('login');
    }
}
