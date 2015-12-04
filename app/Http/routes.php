<?php
use App\Mahasiswa;
use App\Wali;
use App\Dosen;
use App\Matkul;
use App\Http\Controllers\Auth;
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

// Route::get('/', function () {
//     return view('mahasiswa');
// });

Route::get('/', 'mahasiswaController@show2');

Route::get('relasi-1', function () {
    $mahasiswa = Mahasiswa::where('nim','=','1103130173')->first();

    return $mahasiswa->wali->nama;
});

Route::get('relasi-2', function () {
    $mahasiswa = Mahasiswa::where('nim','=','1103130173')->first();

    return $mahasiswa->dosen->nama;
});

Route::get('relasi-3', function () {
    $dosen = Dosen::where('id','=','5')->first();

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

Route::resource('dosen','DosenController');
Route::resource('mahasiswa','MahasiswaController');
Route::resource('matkul','MatkulController');
Route::resource('wali','WaliController');

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

