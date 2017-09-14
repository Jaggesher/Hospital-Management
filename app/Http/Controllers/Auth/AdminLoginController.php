<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AdminLoginController extends Controller
{

	public function __construct()
    {
        $this->middleware('guest:admin',['except' => 'logout']);
    }

    public function ShowLogInForm(){
    	return view('Auth.adminLogin');
    }
    
    public function Login(Request $request){
    	$this->validate($request, [
            'email' => 'required|string',
            'password' => 'required|min:6',
        ]);

    	if(Auth::guard('admin')->attempt(['email' => $request->email,'password' => $request->password],$request->remember)){
			return redirect('/home');
    	}

       // $request->session()->flash('admin_no_match', 'These credentials do not match our records.');

    	return redirect()->back();
    }
	public function logout(Request $request)
	{
		Auth::guard('admin')->logout();

        $request->session()->flush();

        $request->session()->regenerate();

		return redirect('/');
	}
}
