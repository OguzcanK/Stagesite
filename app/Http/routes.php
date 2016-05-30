<?php


Route::get('/', 'ContactController@show');
Route::auth();

Route::get('/home', 'HomeController@index');

