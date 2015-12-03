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
 Route::get('/messages','AccountController@getMessages');
 Route::post('/messages','AccountController@postMessages');
 Route::get('/actu','AccountController@getActu');
 Route::post('/actu','AccountController@postActu');
 Route::get('/map','AccountController@getMap');
 Route::post('/map','AccountController@postMap');
 Route::get('/rules','AccountController@getRules');
 Route::get('/enfants','AccountController@getEnfants');

//Route::controller('account','AccountController');
Route::get('/', 'HomeController@showIndex');

/*
Route::get('/', function()
{
	return View::make('nuitinfo');
});

*/
