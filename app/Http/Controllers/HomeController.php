<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

/**
 * EXTENDS USE
 */
use Auth;
use DB;
use App;

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
	    		->orderBy('created_at', 'asc')
	    		->get();

	    	////////////////////////////////////////////////////////////////////////////////

    	}
    	return view('spicy.welcome', [
		'title' => "Welcome to Noodlepark.",
		'orders' => $allOrder
		]);

    }

    public function completeOrders(Request $request){
    	if($request->ajax()){

    		$data = $request->all();
    		$result = DB::table('tb_order_transaction')
    			->where('code',$data['code'])
    			->update(['status' => $data['method']]);

			$count = DB::table('tb_order_transaction')
				->where([
					['create_date', date("Y-m-d")],
					['status', 'wait']
				])->count();

    		if($result){
		    	$ds = [
		    		"status" => true,
		    		"describe" => "ดำเนินการเสร็จเรียบร้อย",
		    		"count" => $count
		    	];
    		}else{
		    	$ds = [
		    		"status" => false,
		    		"describe" => "การดำเนินการผิดพลาดโปรดลองใหม่ภายหลัง",
		    		"count" => $count
		    	];
    		}

	    	return json_encode($ds);

    	}
    }

    public function exportPDF(){

    	$html = '<style>
					.page-break {
					    page-break-after: always;
					}
					</style>
					<h1>Page 1</h1>
					<div class="page-break"></div>
					<h1>Page 2</h1>';

    	$pdf = App::make('dompdf.wrapper');
    	$pdf->loadHTML($html)
    		->setPaper('a4', 'landscape');
    	return $pdf->stream();

    }
}
