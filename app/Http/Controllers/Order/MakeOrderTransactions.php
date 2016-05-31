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
    		$date = date("Y-m-d H:i:s");
    		$result = DB::table('tb_order_transaction')->insert([
    			'code' => "FT".strtotime($date),
    			'list' => $data['summary'],
    			'amount' => $data['amount'],
    			'price' => $data['price'],
    			'total' => $data['total'],
    			'created_at' => $date,
    			'updated_at' => $date
    		]);
    		if($result){
    			$ds = [
    				'status' => $result,
    				'describe' => 'การสั่งอาหารเรียบร้อยแล้ว',
    			];
    		}else{
    			$ds = [
    				'status' => $result,
    				'describe' => 'การสั่งอาหารผิดพลาดโปรดลองใหม่อีกครั้ง',
    			];
    		}

    		return json_encode($ds);
    	}
    }
}
