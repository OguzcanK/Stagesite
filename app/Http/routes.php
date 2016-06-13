<?php
/**
 * Web Routes
 */

    Route::auth();
    Route::group(['middleware' => ['web'], 'namespace' => 'Web'], function(){
        Route::resource('contact', 'ContactController', ['only' => ['index', 'show', 'create', 'edit']]);
    });

    Route::auth();
    Route::group(['middleware' => ['web'], 'namespace' => 'Web'], function(){
        Route::resource('company', 'CompanyController', ['only' => ['index', 'show', 'create', 'edit']]);
    });

    Route::auth();
    Route::group(['middleware' => ['web'], 'namespace' => 'Web'], function(){
        Route::resource('tool', 'ToolController', ['only' => ['index', 'show', 'create', 'edit']]);
    });

    Route::resource('/', 'HomeController');
//    /**
//     * Admin Routes
//     */
//    Route::group(['middleware' => ['auth', 'admin'], 'namespace' => 'Web', 'prefix' => 'admin', 'as' => 'admin.'], function() {
//        Route::get('account', 'AccountController@index')->name('account.index');
//    });
//
//    /**
//     * Api Routes
//     */
   Route::group(['middleware' => ['api'], 'namespace' => 'API'], function() {
        Route::resource('contact', 'ContactController', ['only' => ['store', 'update', 'destroy']]);
    });

   Route::group(['middleware' => ['api'], 'namespace' => 'API'], function() {
        Route::resource('company', 'CompanyController', ['only' => ['store', 'update', 'destroy']]);
    });

   Route::group(['middleware' => ['api'], 'namespace' => 'API'], function() {
       Route::resource('tool', 'ToolController', ['only' => ['store', 'update', 'destroy']]);
   });