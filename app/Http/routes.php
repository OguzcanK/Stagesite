<?php

Route::group(['middleware' => ['web'], 'namespace' => 'Web'], function() {
    Route::get('/', 'IndexController@show');
});
Route::auth();

Route::get('/home', 'HomeController@index');

