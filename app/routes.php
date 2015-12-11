<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/



Route::get('/', function()
{
         $reservasi = Reservasi::all();
		return View::make('reservasi')->with('dataReservasi', $reservasi);
});

Route::get('reserjos/hapus/{id}','HomeController@destroy');

Route::get('reserjos/edit/{id}','HomeController@edit');

Route::post('update/{id}', array('as' => 'update', 'uses' => 'HomeController@update'));

Route::get('tambah', function()
{
	return View::make('addreservasi');
});

Route::post('book','HomeController@store');