<?php
use App\Mahasiswa;
use App\Wali;
use App\Dosen;
use App\Matkul;
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

Route::get('relasi-1', function () {
    $mahasiswa = Mahasiswa::where('nim','=','1103130173')->first();

    return $mahasiswa->wali->nama;
});

Route::get('relasi-2', function () {
    $mahasiswa = Mahasiswa::where('nim','=','1103130173')->first();

    return $mahasiswa->dosen->nama;
});

Route::get('relasi-3', function () {
    $dosen = Dosen::where('id','=','1')->first();

    foreach ($dosen->mahasiswa as $temp)
			echo '<li> Nama : ' . $temp->nama . ' <strong>' . $temp->nim . '</strong></li>';
});

Route::get('relasi-4', function () {
    $arida = Mahasiswa::where('nim','=','1103130173')->first();

    foreach ($arida->matkul as $temp)
			echo '<li> Matkul : ' . $temp->nama . '</li>';
});

Route::get('relasi-5', function () {
    $ai = Matkul::where('id','=','5')->first();

    foreach ($ai->mahasiswa as $temp)
			echo '<li> Nama : ' . $temp->nama . '</li>';
});