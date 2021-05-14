<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\FOLsController;
use App\Http\Controllers\ApplicantsController;
use App\Http\Controllers\AdminsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/login/forgot', [ForgotPasswordController::class, 'forgot']);
Route::post('/login/forgot', [ForgotPasswordController::class, 'password']);

Route::post('loginme',[LoginController::class,'login']);
Route::view('/dashboard', 'employee-interface.dashboard');

Route::get('/login', function () {
    if(session()->has('email'))
    {
        return redirect('/dashboard');
    }
    return view('login');
});

Route::get('/logout', function () {
    if(session()->has('email'))
    {
        session()->pull('email');
    }
    return redirect('login');
});

// Route::post("fols",[FOLsController::class,'getData']);
Route::view('/file-of-leave/request-form', 'employee-interface.file-of-leave');

// Route::view('/file-of-leave/my-request', 'employee-interface.my-request');

Route::post('/requested', [FOLsController::class,'saveData']);

Route::view('/applicant', 'admin-interface.applicant');


// Route::get('/file-of-leave/my-request', [FOLsController::class,'showData']);

// Route::get('/file-of-leave/my-request', function () {
//     return view('my-request', ['fullname' => 'Samantha']);
// });

Route::get('/file-of-leave/my-request', [FOLsController::class,'showData']);

Route::view('/application-form', 'admin-interface.application-form');
Route::post('/recorded', [ApplicantsController::class, 'saveApplicant']);

Route::view('/admin', 'admin');
Route::post('/added-as-admin', [AdminsController::class, 'addAsAdmin']);

Route::view('/login-as-admin', 'login-as-admin');

Route::post('/loginme-as-admin',[LoginController::class,'loginAsAdmin']);
Route::view('/admin/dashboard', 'admin-interface.dashboard');

Route::view('/admin/file-of-leave', 'admin-interface.file-of-leave');
Route::get('/admin/file-of-leave', [FOLsController::class,'showDataToAdmin']);

Route::view('/home', 'home');
