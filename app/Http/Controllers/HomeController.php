<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

/**
 * EXTENDS USE
 */
use Auth;
use DB;

class HomeController extends Controller
{
    public function getIndex(){
    	$allOrder = null;
    	if(Auth::check()){

	    	/**
	    	 * IF AUTHENTICATED THEN QUERY ALL ORDERS.
	    	 */
	    	$today = date("Y-m-d");
	    	$allOrder = DB::table('tb_order_transaction')
	    		->where([
	    			['create_date', $today],
	    			['status', 'wait']
	    		])
	    		->orderBy('created_at', 'desc')
	    		->get();

	    	////////////////////////////////////////////////////////////////////////////////

    	}
    	return view('spicy.welcome', [
		'title' => "Welcome to Noodlepark.",
		'orders' => $allOrder
		]);

    }
}
