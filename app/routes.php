<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
 Route::get('/index','HomeController@showIndex');
 Route::get('/messages','HomeController@showMessages');
 Route::post('/messages','HomeController@postMessages');
 Route::get('/actu','HomeController@showActu');
 Route::post('/actu','HomeController@showActu');
 Route::get('/map','HomeController@showMap');
 Route::post('/map','HomeController@showMap');
 Route::get('/rules','HomeController@showRules');
 Route::get('/enfants','HomeController@showEnfants');
 Route::get('/login','AccountController@getIndex');
 Route::post('/login','AccountController@postIndex');
 Route::get('/position','AccountController@getPos');
 Route::post('/position','AccountController@postPos');
 Route::get('/moderer','AccountController@getModerer');
 Route::post('/moderer','AccountController@postModerer');

//Route::controller('account','AccountController');
Route::get('/', 'HomeController@showActu');

/*
Route::get('/', function()
{
	return View::make('nuitinfo');
});

*/
