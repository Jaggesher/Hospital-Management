<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
Use Auth;

class patientController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth:web');
    }

    public function Show(){
    	$id=Auth::user()->id;
        $dbVar=User::find($id);
    	return view('patient.view-patient')->with('Personal',$dbVar);
    }

    public function ShowEdit(){
    	$id=Auth::user()->id;
        $dbVar=User::find($id);
    	return view('patient.edit-patient')->with('Personal',$dbVar);
    }

    public function UpdateInfo(Request $request){

    }

    public function UpdatePassword(Request $request){

    }

    public function StorePic(Request $request){

    }


}
