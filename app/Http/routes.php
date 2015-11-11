<?php
use App\Anggota;
use App\Status;
use App\TokoBuku;
use App\Buku;

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
    return view('welcome');
});

Route::get('relasi-1', function() {

		$anggota = Anggota::where('email', '=', 'auliamarchita@gmail.com')->first();
		return $anggota->status->pekerjaan;

});

Route::get('relasi-2', function() {

	
		$anggota = Anggota::where('email', '=', 'auliamarchita@gmail.com')->first();
		return $anggota->tokoBuku->nama;

	});

Route::get('relasi-3', function() {


		$tokoBuku = TokoBuku::where('nama', '=', 'Taman Bacaan')->first();
		foreach ($tokoBuku->anggota as $temp)
			echo '<li>  Nama : ' . $temp->nama . '
					    ' . $temp->email . ' </li>';
	});

Route::get('relasi-4', function() {


		$aulia = Anggota::where('nama', '=', 'Aulia Marchita')->first();
		foreach ($aulia->buku as $temp) 
			echo '<li>' . $temp->judul . '</li>';
	});


Route::get('relasi-5', function() {


		$circa = Buku::where('judul', '=', 'Circa')->first();
		foreach ($circa->anggota as $temp)
			echo '<li> Nama : ' . $temp->nama . ' <strong>' . $temp->email . '</strong></li>';

	});
