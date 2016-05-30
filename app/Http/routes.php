<?php


Route::get('/', 'ContactController@show');
Route::auth();

Route::get('/login', 'HomeController@index');

