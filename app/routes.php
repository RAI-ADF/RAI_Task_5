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
	return View::make('hello');
});
Route::get('relasi-one', function() {

		
		$mahasiswa = Mahasiswa::where('nim', '=', '1103124323')->first();

	
		return $mahasiswa->wali->nama;

	});
Route::get('relasi-Onemany1', function() {


		$mahasiswa = Mahasiswa::where('nim', '=', '1103124323')->first();

		return $mahasiswa->dosen->nama;
});
Route::get('relasi-Onemany2', function() {
		$dosen = Dosen::where('nama', '=', 'Darwis')->first();
		foreach ($dosen->mahasiswa as $temp)
			echo '<li> Nama : ' . $temp->nama . ' <strong>' . $temp->nim . '</strong></li>';
});
