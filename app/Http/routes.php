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

Route::get('/', function () {
    return view('test');
});

 //Route::get('tes','PagesController@home');
// Route::get('array','PagesController@home2');
  Route::get('page1','PagesController@home');
  Route::get('page2','PagesController@home2');

	Route::resource('students','studentsController@index');
	Route::get('students/{id}','studentsController@show');
	Route::get('input','studentsController@store');
	

