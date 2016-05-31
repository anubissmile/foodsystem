<?php

namespace App\Http\Controllers\Order;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

/**
 * EXTENDS USE
 */
use DB;

class MakeOrderTransactions extends Controller
{
    public function createTransaction(Request $request){
    	if($request->ajax()){
    		// $data = $request->input("summary");
    		// return json_encode(["sss" => $data]);
    		$data = $request->all();
    		return json_encode($data);
    	}
    }
}
