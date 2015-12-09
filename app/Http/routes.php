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

Route::get('/',function(){
	if(Auth::user()){
		if(Auth::user()->id=-'1'){
			return view('admin');
		}else{
			echo "user";
		}
	}
	else{
			return view('index');
	}
});



Route::get('users/create', function(){
	if(Auth::user()){
		if(Auth::user()->id=-'1'){
			return view('admin');
		}else{
			echo "user";
		}
	}
	else{
			return view('create');
	}
});


//Route::get('/','usersController@index');
Route::get('users','usersController@index');
//Route::get('users/create', 'usersController@create');
Route::post('users', 'usersController@store'); 
Route::post('login','usersController@login');
Route::get('admin','usersController@admin');
Route::get('item','itemController@index');

//Route::get('account','accountController@index');
//Route::get('account/create', 'accountController@create');
//Route::post('account', 'accountController@store'); 
//Route::get('account/{id}', 'accountController@show');
//Route::get('account/{id}/edit', 'accountController@edit');
//Route::put('account/{id}', 'accountController@update');
//Route::patch('account/{id}', 'accountController@update');
//Route::delete('account/{id}', 'accountController@destroy');

//Route::post('login','accountController@login');
