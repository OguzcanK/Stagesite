<?php


/*Route::get ('/', 'ContactController@show');
Route::auth ();

Route::get ('/home', 'HomeController@index');
Route::get ('/School', 'SchoolController@index');*/


/**
 * Web Routes
 */

/*Route::group (['middleware' => ['web']], function ()
{*/

Route::group (['middleware' => ['api'], 'namespace' => 'API'], function ()
{
	Route::resource ('school', 'SchoolController', ['only' => ['update', 'store', 'destroy']]);
	Route::resource ('location', 'locationController', ['only' => ['update', 'store', 'destroy']]);
	Route::resource ('crebo', 'CreboController', ['only' => ['update', 'store', 'destroy']]);

	//Route::resource ('contact', 'ContactController', ['only' => ['store', 'update', 'destroy']]);
});

	Route::group (['middleware' => ['web'], 'namespace' => 'Web'], function ()
	{
		Route::resource ('school', 'SchoolController', ['only' => ['index', 'show', 'edit', 'create']]);
		Route::resource ('location', 'LocationController', ['only' => ['edit', 'create']]);
		Route::resource ('crebo', 'CreboController', ['only' => ['edit', 'create']]);

		//Route::resource ('contact', 'ContactController', ['only' => ['index', 'show', 'create', 'edit']]);
	});

Route::resource ('/', 'Homecontroller', ['only' => ['show', 'index']]);

Route::auth ();


	/**
	 * Admin Routes
	 */
/*	Route::group ([
					  'middleware' => ['auth', 'admin'],
					  'namespace'  => 'Web',
					  'prefix'     => 'admin',
					  'as'         => 'admin.',
				  ], function ()
	{
		Route::get ('account', 'AccountController@index')->name ('account.index');
	});*/

	/**
	 * Api Routes
	 */
	/*Route::group (['middleware' => ['api'], 'namespace' => 'Api'], function ()
	{
		Route::get ('lang/{lang}', 'LangController@lang')->name ('lang');
		Route::post ('contact/search', 'ContactController@search')->name ('contact.search');
		Route::resource ('contact', 'ContactController', ['only' => ['store', 'update', 'destroy']]);
		Route::resource ('tel', 'TelController', ['only' => ['store', 'update', 'destroy']]);
	});*/
/*});*/