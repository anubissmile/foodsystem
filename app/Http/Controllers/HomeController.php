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
use Wesarut;
use PDF;
use App\Ingredient;

class HomeController extends Controller{

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

        /**
         * FETCH INGREDIENTS.
         */
        // NOODLE
        $noodle = Ingredient::where('type', 'noodle')
            ->orderBy('id', 'asc')
            ->take(7)->get();
        // SOUP
        $soup = Ingredient::where('type', 'soup')
            ->orderBy('id', 'asc')
            ->take(7)->get();
        // TOPPING
        $topping = Ingredient::where('type', 'topping')
            ->orderBy('id', 'asc')
            ->take(7)->get();
        // OTHER
        $other = Ingredient::where('type', 'other')
            ->orderBy('id', 'asc')
            ->take(7)->get();

        /**
         * RETURNING TO THE VIEW.
         */
    	return view('spicy.welcome', [
    		'title' => "Welcome to Noodlepark.",
    		'orders' => $allOrder,
            'noodle' => $noodle,
            'soup' => $soup,
            'topping' => $topping,
            'other' => $other
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

    public function dailySales(Request $request, $type = "today"){

        $cond = $dataset = null;
    	/**
    	 * CHECK FOR TYPE OF METHOD.
    	 */
        $status = true;
    	switch ($type) {
    		case 'today':
    			/**
    			 *	QUERY BY TODAY.
    			 */
                $today = date('Y-m-d');
    			$dataset = DB::table('tb_order_transaction')
                    ->where('create_date', $today)
                    ->orderBy('created_at', 'desc')->get();
                $sumtotal = DB::table('tb_order_transaction')
                    ->where('create_date', $today)
                    ->sum('total');

                $title = "สรุปยอดขายประจำวันที่ " . $today;


    			break;
    		case 'bydate':
    			/**
    			 *	QUERY BY DATE.
    			 */
				$dataset = DB::table('tb_order_transaction')
                    ->where('create_date', $request->date_report)
                    ->orderBy('created_at', 'desc')->get();

                $sumtotal = DB::table('tb_order_transaction')
                    ->where('create_date', $request->date_report)
                    ->sum('total');

                $title = "สรุปยอดขายประจำวันที่ " . $request->date_report;

    			break;
    		case 'between':
    			/**
    			 *	QUERY BY DATE BETWEEN.
    			 */
                $dataset = DB::table('tb_order_transaction')
                    ->whereBetween('create_date', [$request->start_date, 
                        $request->end_date])
                    ->orderBy('created_at', 'desc')->get();

                $sumtotal = DB::table('tb_order_transaction')
                    ->whereBetween('create_date', [$request->start_date, 
                        $request->end_date])
                    ->sum('total');

                $title = "สรุปยอดขายระหว่างวันที่ " . $request->start_date . "-" . $request->end_date;
				
    			break;    		
    		default:
    			# code...
                $status = false;
    			break;
    	}

        /**
         * CHECKING FOR STATUS.
         */
        if($status){
            $pdf = PDF::loadView('spicy.components.dailysales_report', [
                'dataset' => $dataset,
                'sumtotal' => $sumtotal, 
                'title' => $title
            ]);
            return $pdf->stream();
        }else{
            return "การดำเนินการมีบางอย่างผิดพลาด โปรดลองใหม่อีกครั้ง!";
        }
    }

    public function manageIngredient(Request $request){

        /**
         * SETTING DATA SET & VARIABLE.
         */
        $ds = [
            'errStatus' => true,
            'errDescription' => ''
        ];

        $prefixradio = $prefix = '';
        $type = $request->type;

        /**
         * CHECKING TYPE OF INGREDIENT.
         */
        switch ($type) {
            case 'noodle':
                $prefixradio = 'rn';
                $prefix = 'n';
                break;
            case 'soup':
                $prefixradio = 'rs';
                $prefix = 's';
                break;
            case 'topping':
                $prefixradio = 'rt';
                $prefix = 't';
                break;
            case 'other':
                $prefixradio = 'ro';
                $prefix = 'o';
                break;
            default:
                $ds['errStatus'] = false;
                $ds['errDescription'] = "ประเภทส่วนประกอบอาหารไม่ถูกต้อง";
                break;
        }

        /**
         * LOOPING FOR EACH ID.
         */
        for($i=1;$i<=7;$i++){
            $id = $request->input("rec_id$i");
            $description = $request->input($type.$i);
            $price = $request->input($prefix."price$i");
            $traits = $request->input($prefixradio.$i);

            /**
             * EXECUTE (INSERT, UPDATE, DELETE)
             */
            if($description != "" && $id == 'none'){
                /**
                 * INSERT.
                 */
                $result = Ingredient::insert([
                    'description' => $description,
                    'price' => $price,
                    'traits' => $traits,
                    'type' => $type,
                    'create_date' => date('Y-m-d'),
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s')
                ]);
            }else if($description != "" && $id != "none"){
                /**
                 * UPDATE.
                 */
                $ing = Ingredient::find($id);
                $ing->description = $description;
                $ing->price = $price;
                $ing->traits = $traits;
                $result = $ing->save();
            }else if($description == "" && $id != "none"){
                /**
                 * DELETE.
                 */
                $result = Ingredient::where('id', $id)->delete();
            }

        }
        if(!$result){
            echo "การดำเนินการผิดพลาดโปรดลองใหม่อีกครั้ง";
            sleep(2);
        }
        return redirect('/');

    }

}
