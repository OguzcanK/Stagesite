<?php

Route::group(['middleware' => ['web'], 'namespace' => 'Web'], function() {
    Route::get('/', 'IndexController@show')->name('index');
    Route::resource('internship' , 'InternshipController', ['only' => ['create', 'edit', 'show']]);
    Route::resource('status', 'StatusController', ['only' => ['create', 'edit', 'show']]);
    Route::resource('review', 'reviewController', ['only' => ['create', 'edit']]);
	Route::resource ('school', 'SchoolController', ['only' => ['index', 'show', 'edit', 'create']]);
	Route::resource ('location', 'LocationController', ['only' => ['edit', 'create']]);
	Route::resource ('crebo', 'CreboController', ['only' => ['edit', 'create']]);

});

    Route::group(['middleware' => ['web','api'], 'namespace' => 'API'], function() {
        Route::resource('internship' , 'InternshipController', ['only' => ['store', 'update', 'destroy']]);
        Route::resource('status', 'StatusController', ['only' => ['store', 'update']]);
		Route::resource ('school', 'SchoolController', ['only' => ['update', 'store', 'destroy']]);
		Route::resource ('location', 'locationController', ['only' => ['update', 'store', 'destroy']]);
		Route::resource ('crebo', 'CreboController', ['only' => ['update', 'store', 'destroy']]);

});
Route::auth();

Route::get('/home', 'HomeController@index');
