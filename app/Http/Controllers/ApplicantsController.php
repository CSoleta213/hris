<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Applicant;

class ApplicantsController extends Controller
{
    public function saveApplicant(Request $req){
        $applicant = new Applicant;
        $applicant->lastname=$req->lastname;
        $applicant->firstname=$req->firstname;
        $applicant->middlename=$req->middlename;
        $applicant->age=$req->age;
        $applicant->position=$req->position;
        $applicant->save();
        echo 'Thank You!';
    }

    public function countApplicant() {
        $data = Applicant::all();
        return view('applicant',['applicant'=>$data]);
    }
}
