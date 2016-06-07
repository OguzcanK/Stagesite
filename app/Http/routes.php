<?php

Route::group(['middleware' => ['web'], 'namespace' => 'Web'], function() {
    Route::get('/', 'IndexController@show')->name('index');
    Route::resource('internship' , 'InternshipController', ['only' => ['create', 'edit', 'show']]);
    Route::resource('status', 'StatusController', ['only' => ['create', 'edit', 'show']]);
    Route::resource('review', 'reviewController', ['only' => ['create', 'edit']]);
});

    Route::group(['middleware' => ['web','api'], 'namespace' => 'API'], function() {
        Route::resource('internship' , 'InternshipController', ['only' => ['store', 'update']]);
        Route::resource('status', 'StatusController', ['only' => ['store', 'update']]);

});
Route::auth();

Route::get('/home', 'HomeController@index');

