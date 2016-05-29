<?php

namespace App\Http\Controllers\Admins;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

/**
 * EXTENDS
 */
use Auth;
use Hash;
use App\Http\Requests\Admins\LoginRequest;


class LoginController extends Controller
{

    public function login(LoginRequest $request){
    	if(Auth::check()){
    		return redirect('/foods');
    	}else{
    		$username = $request->input('username');
    		$password = $request->input('password');

    		if(Auth::attempt(['USERNAME' => $username, 'PASSWORD' => $password])){
    			return redirect()->intended('admin/dashboard');
    		}else{
    			return redirect()->back()->with('message', "Error!!, Username & Password was incorrect. \n Please try again.");
    		}
    	}
    }


    public function logout(){
    	if(Auth::check()){
    		Auth::logout();
    		return redirect()->intended('/foods');
    	}else{
    		return redirect()->back();
    	}
    }



}
