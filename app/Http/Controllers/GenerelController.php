<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Doctor;
use Auth;

class GenerelController extends Controller
{
    //

    public function index(){
    	return view('Home.home');
    }

    public function ShowDoctors(){
    	$dbVar=Category::all();
    	return view('doctor.doctors')->with('Categories',$dbVar);
    }

    public function Doctors(Request $request){
    	$dbVar=Doctor::where('category',$request->category)->get();
    	$data='';

    	foreach ($dbVar as $Personal) {

    		$data.='<div class="col-sm-3">
			            <div class="mem_box">
			                <h2><strong> <i>'. $Personal->name .'</i></strong></h2>
			                <h3>'.$Personal->category.'</h3>
			                <h4>Time : '.$Personal->duty_time .'</h4>
			                <h5>'.$Personal->sort_msg .'</h5>
			                <div class="mem_btn_div">
			                    <form role="form" method="get" action="'.route('Doc.View', ['id' => $Personal->id]).'">
			                        <input type="hidden" name="id" value="'.$Personal->id.'">
			                        <button name="action" value="accept" class="btn btn-default btn-md" type="submit" data-toggle="tooltip" data-placement="bottom" title="View" ><i class="glyphicon glyphicon-eye-open"></i></button>
			                    </form>     
			                </div>
			            </div>
			        </div>';
    	}
	    if($data=='') {$data=' <br>
	        <br>
	        <br>
	        <br>
	        <h1 class="alert alert-success text-center">We Are Sorry. Currently We have No Doctors Of This Category</h1>';}

    	return $data;
    }
}
