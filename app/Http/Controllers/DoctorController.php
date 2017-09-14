<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Category;
use App\Doctor;
use App\User;

class DoctorController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth:admin',['except' => 'ViewDoc']);
    }

    public function ViewDoc($id)
    {
    	$dbVar=Doctor::find($id);
    	return view('doctor.view-doctor')->with('Personal',$dbVar);
    }

    public function ShowAddDoc(){
    	$dbVar=Category::all();
    	return view('doctor.add-doctor')->with('Categories',$dbVar);
    }

    public function AddDoc(Request $request){
    	$this->validate($request,[
            'name' => 'required|string|max:49|unique:doctors',
            'sort_msg' => 'required|string|max:149',
            'category' => 'required|string',
            'description' => 'required|string',
            'Money' => 'required|integer',
            'Office' => 'required|string|max:10',
            'duty_time' => 'required'
        ]);

    	$dbVar= new Doctor();
    	$dbVar->name=$request->name;
    	$dbVar->sort_msg=$request->sort_msg;
    	$dbVar->category=$request->category;
    	$dbVar->description=$request->description;
    	$dbVar->Money=$request->Money;
    	$dbVar->Office=$request->Office;
    	$dbVar->duty_time=$request->duty_time;
    	$dbVar->save();

    	return redirect()->route('Doc.View', ['id' => $dbVar->id]);
    }


    public function ShowEdit($id){
        $dbVar=Doctor::find($id);
        $dbCat=Category::all();
        //return $dbVar;
    	return view('doctor.edit-doctor')->with('Personal',$dbVar)->with('Categories',$dbCat);
    }

    public function UpdateInfo(Request $request){

       $this->validate($request,[
            // 'name' => 'required|string|max:49|unique:doctors',
            'sort_msg' => 'required|string|max:149',
            'category' => 'required|string',
            'description' => 'required|string',
            'Money' => 'required|integer',
            'Office' => 'required|string|max:10',
            'duty_time' => 'required'
        ]);

        $dbVar=Doctor::find($request->id);
        $dbVar->name=$request->name;
        $dbVar->sort_msg=$request->sort_msg;
        $dbVar->category=$request->category;
        $dbVar->description=$request->description;
        $dbVar->Money=$request->Money;
        $dbVar->Office=$request->Office;
        $dbVar->duty_time=$request->duty_time;
        $dbVar->save();

        return redirect()->route('Doc.View', ['id' => $dbVar->id]);
    }

    public function StorePic(Request $request){
    	 $this->validate($request,[
            'fileToUpload' => 'required|image|mimes:jpeg,jpg,png|max:2500',
        ]);

        $file = $request->file('fileToUpload');
        $id=$request->id;
        $dbVar=Doctor::find($id);
        $destinationPath="profilePicture";
        $fileName=$id.'D.'.$file->getClientOriginalExtension();
        $uploadSuccess = $file->move($destinationPath, $fileName);
        if($uploadSuccess){
            $dbVar->img=$destinationPath.'/'.$fileName;
            $dbVar->save();
            return redirect()->route('Doc.View', ['id' => $dbVar->id]);
        }
        //Here just send a flush message for for someting wrong for storing picture
        $request->session()->flash('wrong', 'Something Went Wrong. Please Try Latter');

        return redirect()->back();
    }

    public function AddDate($Request $request){
        
    }

}
