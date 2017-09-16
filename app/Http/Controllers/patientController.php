<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
Use Auth;
Use Hash;
use App\Category;
use App\Doctor;
use App\Date;
use App\Serial;

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

    public function UpdatePassword(Request $request){

        $id=Auth::user()->id;
        $dbVar=User::find($id);
        $hashedPassword=$dbVar->password;

        $this->validate($request,[
            'old_password' => 'required|max:15|min:6',
            'password' => 'required|max:15|min:6|confirmed',
        ]);

        if (Hash::check($request->old_password, $hashedPassword)) {
            $dbVar->password=bcrypt($request['password']);
            $dbVar->save();
            return redirect()->route('patient.Profile');
        }

        //Here just send a flush message for invalid old password
        $request->session()->flash('no_match', 'Invalid Old Password');

        return redirect()->back();
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

    public function ShowAddSerial(){
        $dbVar=Category::all();
        return view('patient.give-serial')->with('Categories',$dbVar);
    }

    public function AddSerial(Request $request){
        $date=date("Y-m-d");
        $this->validate($request,[
            'category' => 'required|string',
            'doctor'  => 'required',
            'date'   =>'required',
        ]);

        $Position=Serial::where('serial_date',$request->date)->count();

        $code=(string)(rand()%1000);
        $code.=(string)(rand()%1000);
        $code.=(string)(rand()%1000);

        $dbVar=new Serial();
        $dbVar->serial_date=$request->date;
        $dbVar->position=$Position+1;
        $dbVar->patient=Auth::user()->id;
        $dbVar->code=$code;
        $dbVar->save();

        return redirect()->route('patient.Profile');

    }

    public function getDoc(Request $request){
        $dbVar=Doctor::where('category','=',$request->category)->get();

        $data='<option value="" disabled selected hidden>Select Category.</option> ';
        foreach ($dbVar as $var) {
            $data.=' <option value="'.$var->id.'">'.$var->name.'.</option>';
        }
        return $data;
    }

    public function getDocInfo( Request $request){
        $dbVar=Doctor::find($request->id);

        return view('ajaxViews.doctor')->with('Personal',$dbVar);;
    }

    public function getDates( Request $request){
        $date=date("Y-m-d");
        $dbVar=Date::where('doctor',$request->id)->orderBy('id', 'desc')->get();
        $data='<option value="" disabled selected hidden>Select Date.</option> ';
        foreach ($dbVar as $var) {
            $dbVar2=Serial::where('serial_date',$var->id)->where('patient',Auth::user()->id)->first();
            if($date <= $var->serial_date && count($dbVar2)==0){
                $data.=' <option value="'.$var->id.'">'.$var->serial_date.'.</option>';
            }
            
        }
        return $data;
    }
}
