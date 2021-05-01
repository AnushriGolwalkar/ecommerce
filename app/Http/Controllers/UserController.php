<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Auth;
use App\cart;
use Session;

class UserController extends Controller
{

	
    public function login()
	{
		return view('Front.login');
	}


	public function loginsave(Request $l)
	{
		// print_r($l->all());

		$session_id=Session::getId();
		$data=$l->all();

		if(Auth::attempt(['email'=>$data['email'],'password'=>$data['password']]))
		{
			Cart::where('session_id',$session_id)->update(['useremail'=>$data['email']]);
			return redirect('cart')->with('message','login successful!');
		}
		else
		{
			return redirect()->back()->with('message','Invalid Username or Password');
		}

	}

	public function logout()
	{
		Auth::logout();
		return redirect('/');
	}

	public function register()
	{
		return view('Front.register');
	}
	public function regsave(Request $a)
	{
		$this->validate($a,[
		"name"=>"required", //rules
        "email"=>"required|max:30|min:8|email|unique:users",
        "password"=>"required|min:8|max:15|",
   		]);


		$data=new User;

		$data->name=$a->name;
		$data->email=$a->email;
		$data->password=Hash::make($a->password);

		$data->save();



		if($data)
		{
			return redirect('Front/login')->with('message','Registration successful! Login using Email and Password');
		}
	}
}