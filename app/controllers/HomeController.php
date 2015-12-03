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
		$villes = DB::table('position')->select('label')->get();

		foreach ($villes as $ville)
		{
		    $listvilles[]=$ville;
		}

		return View::make('messages')
				->with('villes',$listvilles);
	}

	public function showActu()
	{
		return View::make('actu');
	}

	public function showMap()
	{
		return View::make('map');
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
