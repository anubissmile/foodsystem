<?php

namespace App\Http\Controllers\Admins;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
/**
 * EXTENDS
 */
use Auth;
use App\Http\Requests\Admins\LoginRequest;

class LoginController extends Controller
{

	public function getIndex(){
		if(Auth::check()){
			return redirect('/');
		}else{
			return view('admin_auth.auth');
		}
	}

    public function login(LoginRequest $request){
    	$username = $request->input('usr');
    	$password = $request->input('pwd');

    	if(Auth::attempt(["username" => "$username", "password" => "$password"])){
            return redirect('/');
            /**
             * intended() is redirect to fail request before you got login.
             *  redirect() is go to anywhere.
             */
    	}else{
    		return redirect()->back()->with('message', "Error!! Username or Password Incorrect. \nPlease try again.");
    	}
    }

    public function logout(){
    	if(Auth::check()){
    		Auth::logout();
    		sleep(0.5);
    		return redirect()->intended('/admin/login');
    	}else{
    		return redirect()->intended('/');
    	}
    	// return "logout";
    }
}
