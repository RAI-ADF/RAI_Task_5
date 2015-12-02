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



Route::get('/','sampleController@home');
Route::get('about','sampleController@about');
Route::get('detail','sampleController@detail');


Route::get('mahasiswa', 'MahasiswaController@home');

Route::get('mahasiswa/login', 'MahasiswaController@login');
Route::post('mahasiswa/login-check', 'MahasiswaController@loginCheck');

Route::get('mahasiswa/form-create', 'MahasiswaController@formCreate');
Route::post('mahasiswa/form-create-save', 'MahasiswaController@formCreateSave'); 

Route::get('mahasiswa/view', 'MahasiswaController@viewAll');

Route::get('mahasiswa/form-edit/{id}', 'MahasiswaController@formEdit');
Route::post('mahasiswa/form-edit-update', 'MahasiswaController@formEditUpdate');

Route::get('mahasiswa/form-delete/{id}', 'MahasiswaController@formDelete');



Route::resource('mahasiswa', 'MahasiswaController');

