<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoctorController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth:admin'['except' => 'ViewDoc']);
    }

    public function ViewDoc($id)
    {

    }

    public function ShowAddDoc(){
    	return view('doctor.add-doctor');
    }

    public function AddDoc(Request $request){
    	return view('doctor.add-doctor');
    }


    public function ShowEdit($id){
    	$id=Auth::user()->id;
        $dbVar=User::find($id);
    	return view('patient.edit-patient')->with('Personal',$dbVar);
    }

    public function UpdateInfo(Request $request){

        $this->validate($request,[
            'fname' => 'required|string|max:20',
            'lname' => 'required|string|max:20',
            'gender' => 'required|string',
            'phone' => 'required|numeric',
            'age' => 'required|integer',
        ]);

        $id=Auth::user()->id;
        $dbVar=User::find($id);
        $dbVar->fname=$request['fname'];
        $dbVar->lname=$request['lname'];
        $dbVar->gender=$request['gender'];
        $dbVar->phone=$request['phone'];
        $dbVar->age=$request['age'];
       
        $dbVar->save();
        
        return redirect()->route('patient.Profile');
    }

    public function StorePic(Request $request){
    	 $this->validate($request,[
            'fileToUpload' => 'required|image|mimes:jpeg,jpg,png|max:2500',
        ]);

        $file = $request->file('fileToUpload');
        $id=Auth::user()->id;
        $dbVar=User::find($id);
        $destinationPath="profilePicture";
        $fileName=$id.'P.'.$file->getClientOriginalExtension();
        $uploadSuccess = $file->move($destinationPath, $fileName);
        if($uploadSuccess){
            $dbVar->img=$destinationPath.'/'.$fileName;
            $dbVar->save();
            return redirect()->route('patient.Profile');
        }
        //Here just send a flush message for for someting wrong for storing picture
        $request->session()->flash('wrong', 'Something Went Wrong. Please Try Latter');

        return redirect()->back();
    }

}
