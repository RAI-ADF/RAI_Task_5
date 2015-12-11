<?php

Route::get('/', 'WelcomeController@index');

Route::get('/profile', 'ProfileController@index');
Route::get('/materi', 'ProfileController@materi');

