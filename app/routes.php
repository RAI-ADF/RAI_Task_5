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

		# Temukan mahasiswa dengan NIM 1015015072
		$mahasiswa = Mahasiswa::where('nim', '=', '1103124323')->first();

		# Tampilkan nama wali mahasiswa
		return $mahasiswa->wali->nama;

	});
Route::get('relasi-Onemany1', function() {

		# Temukan mahasiswa dengan NIM 1015015072
		$mahasiswa = Mahasiswa::where('nim', '=', '1103124323')->first();

		# Tampilkan nama dosen pembimbing
		return $mahasiswa->dosen->nama;
});
Route::get('relasi-Onemany2', function() {

		# Temukan dosen dengan yang bernama Yulianto
		$dosen = Dosen::where('nama', '=', 'Darwis')->first();

		# Tampilkan seluruh data mahasiswa didikannya
		foreach ($dosen->mahasiswa as $temp)
			echo '<li> Nama : ' . $temp->nama . ' <strong>' . $temp->nim . '</strong></li>';
});
