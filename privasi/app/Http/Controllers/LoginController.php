<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Redirector;

class LoginController extends Controller
{
	public function __construct()
    {
        $this->middleware('guest');
    }
    public function index(){
    	return view ('auth.login');
    }

    public function getLogin (Request $req)
    {
       	if (Auth::attempt(['email' => $req->email, 'password' => $req->password])) {
            // Authentication passed...
    		return redirect('/')->withInput();
    	}
	    if(Auth::attempt(['email' => $req->emailLog, 'password' => $req->passwordLog]))
	    {
	    	return redirect()->intended('login');
        }
        else
        {
         return redirect()->back()->withErrors(array('email' => 'Wrong email','password'=>'wrong password'));
         //return Redirect::back()->withInput()->withErrors(array('user_name' => $message));
        }
    }

}
