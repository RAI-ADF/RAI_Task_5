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

Route::get('/','Auth\AuthController@toHome');
// LOGIN AND LOGOUT
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');
// REGISTER
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

// ADMIN
Route::get('admin',[
    'middleware'=>'auth',
    'uses'=>'AdminController@getOrders'
]);
Route::get('admin/laporan',[
    'middleware'=>'auth',
    'uses'=>'AdminController@getLaporan'
]);

// CUSTOMER
Route::get('home',[
    'middleware'=>'auth',
    'uses'=>'AppController@index'
]);

