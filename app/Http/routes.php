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

Route::get('/', function () {
    return view('test');
});

 //Route::get('tes','PagesController@home');
// Route::get('array','PagesController@home2');
  Route::get('page1','PagesController@home');
  Route::get('page2','PagesController@home2');

	Route::get('students','studentsController@index');
	Route::get('students/{id}','studentsController@show' );
	Route::get('input','studentsController@store');
	
	//director
	Route::get('director','DirectorController@index');
	Route::post('director_input','DirectorController@store');
	
	//genre
	Route::get('genre','GenreController@index');
	Route::post('genre_input','GenreController@store');
	
	//cinema
	Route::get('cinema','CinemaController@index');
	Route::post('cinema_input','CinemaController@store');
	
	//movie
	Route::get('movie','MovieController@index');
	Route::post('movie_input','MovieController@store');

