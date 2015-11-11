<?php
use App\Anggota;
use App\DetailAnggota;
use App\Rental;
use App\Game;
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
    $anggota = Anggota::where('nama', '=', 'Arvin Chendriyana Supriyadi')->first();
    return $anggota->detailanggota->alamat;
});

Route::get('relasi-2', function() {
    $anggota = Anggota::where('nama', '=', 'Arvin Chendriyana Supriyadi')->first();
    return $anggota->rental->nama;
});

Route::get('relasi-3', function() {
    $rental = Rental::where('nama', '=', 'Hanzo')->first();
    foreach ($rental->anggota as $temp)
        echo '<li> Nama : ' . $temp->nama .  '</li>';
});

Route::get('relasi-4', function() {
    $arvin = Anggota::where('nama', '=', 'Arvin Chendriyana Supriyadi')->first();
    foreach ($arvin->game as $temp) 
        echo '<li>' . $temp->judul . '</li>';
});

Route::get('relasi-5', function() {
    $fallout_4 = Game::where('judul', '=', 'Fallout 4')->first();
    foreach ($fallout_4->anggota as $temp)
        echo '<li> Nama : ' . $temp->nama . '</li>';
        });
