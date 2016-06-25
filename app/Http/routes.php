<?php

Route::group(['middleware' => ['web'], 'namespace' => 'Web'], function() {
    Route::get('/', 'IndexController@index')->name('index');
	Route::post('/search/', 'IndexController@search')->name('search');
    Route::resource('internship' , 'InternshipController', ['only' => ['create', 'edit', 'show']]);
    Route::resource('status', 'StatusController', ['only' => ['create', 'edit', 'index']]);
    Route::resource('review', 'reviewController', ['only' => ['create', 'edit']]);
	Route::resource ('school', 'SchoolController', ['only' => ['index', 'show', 'edit', 'create']]);
	Route::resource ('location', 'LocationController', ['only' => ['edit', 'create']]);
	Route::resource ('crebo', 'CreboController', ['only' => ['index', 'edit', 'create']]);
	Route::resource('tool', 'ToolController', ['only' => ['index', 'show', 'create', 'edit']]);
	Route::resource('company', 'CompanyController', ['only' => ['index', 'show', 'create', 'edit']]);
	Route::resource('contact', 'ContactController', ['only' => ['index', 'show', 'create', 'edit']]);
	Route::resource('profile', 'ProfileController', ['only' =>['index', 'show', 'edit']]);
});

Route::group(['middleware' => ['web','api'], 'namespace' => 'API'], function() {
	Route::resource('internship' , 'InternshipController', ['only' => ['store', 'update', 'destroy']]);
	Route::resource('status', 'StatusController', ['only' => ['store', 'update', 'destroy']]);
	Route::resource ('school', 'SchoolController', ['only' => ['update', 'store', 'destroy']]);
	Route::resource ('location', 'locationController', ['only' => ['update', 'store', 'destroy']]);
	Route::resource ('crebo', 'CreboController', ['only' => ['update', 'store', 'destroy']]);
	Route::resource('contact', 'ContactController', ['only' => ['store', 'update', 'destroy']]);
	Route::resource('company', 'CompanyController', ['only' => ['store', 'update', 'destroy']]);
	Route::resource('tool', 'ToolController', ['only' => ['store', 'update', 'destroy']]);
	Route::resource('review', 'ReviewController', ['only' => ['store', 'update', 'destroy']]);
	Route::resource('student', 'StudentController', ['only' => ['store', 'update']]);
	Route::resource('profile', 'ProfileController', ['only' =>['update']]);
});
Route::auth();

Route::get('/email', function() {
	\Illuminate\Support\Facades\Mail::send('emails.test', ['name' => 'Testname'], function($message) {
		$message->to('okarakoc.mp@gmail.com', 'some guy')->subject('Test succes');
	});
});


Route::get('/home', 'HomeController@index');
