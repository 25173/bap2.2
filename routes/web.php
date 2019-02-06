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

Route::get( '/', function () {
	return view( 'welcome' );
} );
Route::get( '/home', 'HomeController@index' )->name( 'home' );

Auth::routes();


route::middleware( 'auth' )->group( function () {
	route::get( '/change-password', 'profilecontroler@editPassword' )->name( 'profile.show_password_form' );
	route::put( '/change-password', 'profilecontroler@updatePassword' )->name( 'profile.update_password' );

	route::get( '/users', 'Usercontroler@showUsers' )
	     ->middleware( 'is.admin' )//gekoppeld aand de middleware
	     ->name( 'user.users' );
} );
