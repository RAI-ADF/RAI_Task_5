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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','someController@home');
Route::get('/contact','someController@contact');
Route::get('/register','someController@register');
Route::get('/login','someController@login');
Route::get('/logout','someController@logout');
Route::get('/some1','pagesController@somePage1');
Route::get('/some2','pagesController@somePage2');
Route::get('/page1','pagesController@page1');
Route::get('/page2','pagesController@page2');
Route::get('students', 'studentsController@index');
Route::get('students/create', 'studentsController@create');
Route::post('students', 'studentsController@store'); 
Route::get('students/{id}', 'studentsController@show');
Route::get('students/{id}/edit', 'studentsController@edit');
Route::put('students/{id}', 'studentsController@update');
Route::patch('students/{id}', 'studentsController@update');
Route::delete('students/{id}', 'studentsController@destroy');
Route::resource('students', 'studentsController');
// Route::controllers{[
// 	'auth'=>'Auth\AuthController',
// 	'password'=>'Auth\PasswordController',
// ]};