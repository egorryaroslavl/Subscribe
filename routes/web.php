<?php

	/*
	|--------------------------------------------------------------------------
	| Web Routes
	|--------------------------------------------------------------------------
	|
	| Here is where you can register web routes for your application. These
	| routes are loaded by the RouteServiceProvider within a group which
	| contains the "web" middleware group. Now create something great!
	|
	*/
	Route::post( '/logout', 'Auth\LoginController@logout' );

	Route::get( '/', function (){
		return view( 'welcome' );
	} );



	Route::get( '/holliday_today', function (){
		return view( 'hd' );
	} )->name('holliday');

	Auth::routes();

	//Route::get( '/admin', 'AdminController@index' );


	Route::group( [ 'middleware' => [ 'auth' ] ], function (){

		Route::get( '/register', function (){
			return redirect('/');
		} );

		Route::get( '/admin', function (){

			return view( 'admin.index', [ 'content' => "Не выбран раздел" ] );
		}
		);


		/*	Route::get( '/admin/partners', 'PartnersController@index' );*/
		Route::get( '/admin/partners', 'PartnersController@index' );
		Route::get( '/admin/partners/create', 'PartnersController@create' );
		Route::get( '/admin/partners/edit/{id}', 'PartnersController@edit' );


		Route::post( '/admin/partners/create', 'PartnersController@store' )
			->middleware( 'partnerdataprepare' )->name( 'PartnersStore' );
		Route::post( '/admin/partners/update', 'PartnersController@update' )
			->middleware( 'partnerdataprepare' );
		Route::get( '/admin/partners/delete/{id}', 'PartnersController@destroy' );
		Route::post( '/admin/partners/delete', 'PartnersController@destroy' );

		Route::post( '/partnerSearch', 'PartnersController@partnerSearch' );


		Route::get( '/admin/messages', 'MessagesController@index' )->name( 'messagesList' );
		Route::get( '/admin/messages/create', 'MessagesController@create' );

		Route::get( '/admin/messages/copy/from/{id}', 'MessagesController@copy' );
		Route::post( '/admin/messages/create', 'MessagesController@store' );
		Route::get( '/admin/messages/show/{id}', 'MessagesController@show' );
		Route::get( '/admin/messages/delete/{id}', 'MessagesController@destroy' );


		Route::post( '/sendMail', 'MessagesController@sendMail' );
		Route::post( '/testMail', 'MessagesController@testMail' );


		/*
				Route::get( 'mail/queue', function (){

					Mail::to('yaroslavl.city@gmail.com')->queue(new \App\Mail\Reminder([]));


				} );*/

	} );


