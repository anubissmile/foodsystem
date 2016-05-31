<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/**
 * ROUTE FOR TESTING.
 */

Route::get('our-menu', function(){
	return view('spicy.blog_archive', [
		'title' => "Noodlepark | Our menu"
	]);
});

Route::get('get-order', function(){
	return view('spicy.blog_single', [
		'title' => "Noodlepark | Get orders"
	]);
});

//////////////////////////////////////////////////////////////////////////////


/**
 * ROUTE FOR FIRST PAGE & REDIRECT TO ANOTHER PAGES.
 */

Route::get('/', function () {
    // return view('welcome');
    return view('spicy.welcome', [
		'title' => "Welcome to Noodlepark."
	]);
});

Route::get('ad.min', function(){
	return redirect('admin/login');
});

Route::get('log.out', function(){
	return redirect('admin/logout');
});

Route::get('or.der', function(){
	return "order";
});

Route::get('man.men', function(){
	return "manage menu";
});

Route::get('ho.me', function(){
	return redirect('/');
});

//////////////////////////////////////////////////////////////////////////////

/**
 * ROUTE FOR AJAX PAGE.
 */

Route::post('make/orders', "Order\MakeOrderTransactions@createTransaction");

//////////////////////////////////////////////////////////////////////////////

/**
 * ROUTE FOR admin/* PREFIX
 */

Route::group(['prefix' => 'admin'], function(){

	/**
	 * ROUTE FOR NAMESPACE Admins\*Controller
	 */

	Route::group(['namespace' => 'Admins'], function(){
		Route::get('login', 'LoginController@getIndex');
		Route::post('login', 'LoginController@login');
		Route::get('logout', 'LoginController@logout');
	});

	//////////////////////////////////////////////////////////////////////////////

	/**
	 * ROUTE FOR MIDDLEWARE BY 'auth'
	 */

	Route::group(['middleware' => 'auth'], function(){
		
	});
	
	//////////////////////////////////////////////////////////////////////////////


});

//////////////////////////////////////////////////////////////////////////////




