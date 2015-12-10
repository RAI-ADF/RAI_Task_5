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

Route::get('home', 'WelcomeController@index');
Route::get('/', 'WelcomeController@index');

Route::get('viewdata', 'ViewDataController@viewdata');
Route::get('managedata', 'ManageDataController@index');
Route::get('inputdata', 'ManageDataController@inputdata');
Route::get('input', array('uses'=>'ManageDataController@create'));

/*Route::get('home', 'HomeController@index');
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);*/
