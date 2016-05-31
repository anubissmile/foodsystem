<?php

namespace App\Http\Controllers\Admins;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class OrdersController extends Controller
{
    public function getIndex(){
    	return view('spicy.all_order', [
    		'title' => "Foodpark | All Menu"
    	]);
    }
}
