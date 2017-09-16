<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Category;
use App\Doctor;
use App\User;
use App\Date;
use App\Serial;

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
        $dbVar2=Date::where('doctor',$id)->orderBy('id', 'desc')->with('Number')->get();
    	return view('doctor.view-doctor')->with('Personal',$dbVar)->with('Dates',$dbVar2);
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

    public function AddDate(Request $request){
        $date=date("Y-m-d");
        $this->validate($request,[
            'serial_date' => 'required|date|date_format:Y-m-d|after_or_equal:'.$date,
        ]);
        $dbVar=Date::where('serial_date',$request->serial_date)->where('doctor',$request->doctor)->first();
            if(!count($dbVar)){
                $dbVar=new Date();
                $dbVar->serial_date= $request->serial_date;
                $dbVar->doctor= $request->doctor;
                $dbVar->save();
                return redirect()->route('Doc.View', ['id' => $dbVar->doctor]);   
            }
           

        $request->session()->flash('Already_added', 'You Already added the date, Choose other.');

        return redirect()->back();

    }

    public function ShowPdf($id){
        $dbVar=Serial::select('patient','position','code')->where('serial_date',$id)->orderBy('position')->with('Patients')->get();

        //$dbVar2=Date::select()->with('Doctor')->find($id);

        $dbVar1=Date::find($id);
        $dbVar2=Doctor::select('name','category')->find($dbVar1->doctor);
        

        $data = [
            'Doctor' => $dbVar2,
            'Date' =>$dbVar1,
            'Patients' => $dbVar
        ];

        $pdf = PDF::loadView('pdf.serialList', $data);
        return $pdf->stream('serialList.pdf');

        //return view('pdf.serialList')->with('Doctor',$dbVar2)->with('Date',$dbVar1)->with('Patients',$dbVar);
    }

}
