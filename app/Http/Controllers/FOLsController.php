<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FOL;
use Illuminate\Support\Facades\DB;

class FOLsController extends Controller
{
    function saveData(Request $req)
    {
      $fol = new FOL;
      $fol->code_name=$req->code_name;
      $fol->fullname=$req->fullname;
      $fol->position=$req->position;
      $fol->dept=$req->dept;
      $fol->requestFor=$req->requestFor;
      $fol->natures_of_leave=$req->natures_of_leave;
      $fol->periodFrom=$req->periodFrom;
      $fol->periodTo=$req->periodTo;
      $fol->days=$req->days;
      $fol->reason=$req->reason;
      $fol->certified=$req->certified;
      $fol->save();
      echo 'Your request has been sent!';
    }

    public function showData() {
      $data = FOL::all();
      return view('employee-interface.my-request', ['requests'=>$data]);
    }

    public function showDataToAdmin() {
      $data = FOL::all();
      return view('admin-interface.file-of-leave', ['requests'=>$data]);
    }
}
