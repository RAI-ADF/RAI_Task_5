<?php
use App\Mahasiswa;
use App\Wali;
use App\Dosen;
use App\Hobi;
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
//RELASI ELOQUENT
Route::get('relasi-1', function() {

	$mahasiswa = Mahasiswa::where('nim', '=', '1103120133')->first();
	return $mahasiswa->wali->nama;
});
Route::get('relasi-2', function() {

	$mahasiswa = Mahasiswa::where('nim', '=', '1103124321')->first();
	return $mahasiswa->dosen->nama;
});
Route::get('relasi-3', function() {

	$dosen = Dosen::where('nama', '=', 'Fazma Arif')->first();
	foreach ($dosen->mahasiswa as $temp)
		echo '<li> Nama : ' . $temp->nama . ' <strong> (' . $temp->nim . ') </strong></li>';
});
Route::get('relasi-4', function() {

	$ganin = Mahasiswa::where('nama', '=', 'Ganine Vinanda')->first();
	foreach ($ganin->hobi as $temp) 
		echo '<li>' . $temp->hobi . '</li>';
});
Route::get('relasi-5', function() {

	$ngoding = Hobi::where('hobi', '=', 'Ngoding')->first();
	foreach ($ngoding->mahasiswa as $temp)
		echo '<li> Nama : ' . $temp->nama . ' <strong>' . $temp->nim . '</strong></li>';

});
Route::get('eloquent', function() {

	$mahasiswa = Mahasiswa::with('wali', 'dosen', 'hobi')->get();
	return View::make('eloquent', compact('mahasiswa'));
});

//DUMMY DATA-FAKER LIBRARY
get('blog', 'BlogController@index');
get('blog/{slug}', 'BlogController@showPost');

//FORM DAN VIEW
Route::get('article/create','ArticleController@add');
Route::get('article','ArticleController@index');
Route::post('article','ArticleController@simpan');
