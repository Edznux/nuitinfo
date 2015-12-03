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
 Route::get('/account','AccountController@getIndex');
 Route::post('/account','AccountController@postIndex');
 Route::get('/login','AccountController@getLogin');
 Route::post('/login','AccountController@postLogin');
 Route::get('/account/register','AccountController@getRegister');
 Route::post('/account/register','AccountController@postRegister');

//Route::controller('account','AccountController');
Route::get('/', 'HomeController@showIndex');

/*
Route::get('/', function()
{
	return View::make('nuitinfo');
});

*/
