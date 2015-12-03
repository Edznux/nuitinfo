<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showIndex()
	{
		return View::make('nuitinfo')
			->with('title',"tamere")
			->with('other', "Mon autre variable custom");
	}

	public function showMessages()
	{
		$villes = Position::all();

		return View::make('messages')
				->with('villes',$villes);
	}

	public function showActu()
	{
		return View::make('actu');
	}

	public function showMap()
	{
		$position = Position::all();
		return View::make('map')
			->with('position',$position);
	}

	public function showRules()
	{
		return View::make('rules');
	}

	public function showEnfants()
	{
		return View::make('enfants');
	}
}
