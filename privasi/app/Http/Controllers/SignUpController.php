<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\user;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;

class SignUpController extends Controller
{
	use RegistersUsers;
	protected $redirectTo = '/home';

	public function __construct()
    {
        $this->middleware('guest');
    }


    public function index(){
    	return view ('template.signup');
    }

    public function doRegister(Request $request)
    {
    	$validator = Validator::make($request->all(), [
            'name' => 'required|unique:db_users|max:255',
            'email' => 'required|unique:db_users|max:255',
            'password' =>'required|min:6'
        ]);

        if ($validator->fails()) {
            return redirect('/signup')
                        ->withErrors($validator)
                        ->withInput();
        }else{
        $register = User::create([
            'name' => $request ->name,
            'email' => $request ->email,
            'password' => bcrypt($request ->password),
            'handphone_no'=>$request->no_hp,
            'status'=>'1'
        ]);
    	}
    	$user = Auth::attempt(['email' => $request->email, 'password' => $request->password]);
    	//dd($user);
    	return redirect('/');
    }
}
