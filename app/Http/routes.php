<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::auth();

Route::get('/', function () {
	return view('index');
});

Route::get('/cennik', function () {
	return view('cennik');
});

Route::get('/kontakt', function () {
	return view('kontakt');
});

Route::get('/sluzby', function () {
	return view('sluzby');
});

Route::get('/home', 'HomeController@index');

Route::get('/kontakt', [
	'uses' => 'ContactMessageController@create'
]);
Route::post('/kontakt', [
	'uses' => 'ContactMessageController@store',
	'as' => 'kontakt.store'
]);


Route::get('/reservations', 'ReservationController@index')->name('reservations');
Route::get('/rezervacia/{id}', 'ReservationTicketController@create')->name('reservation');
Route::post('/rezervacia/{id}', 'ReservationTicketController@store');
Route::delete('/rezervacia/ticket/{id}', 'ReservationTicketController@destroy')->name('ticket');
//Password reset rout
Route::get('password/reset/{token?}', 'Auth\PasswordController@showResetForm');
Route::post('password/email' , 'Auth\PasswordController@sendResetLinkEmail');
Route::post('password/reset', 'Auth\PasswordController@reset');



