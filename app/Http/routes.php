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

/*Route::get('test', function(){
	return view('test.child');
});*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('foods', function(){
	return view('spicy.welcome', [
		'title' => "Welcome to Noodlepark."
	]);
});

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

Route::group(['prefix' => 'admin'], function(){

	Route::get('login', function(){
		return view('admin_auth.auth');
	});

});




?>