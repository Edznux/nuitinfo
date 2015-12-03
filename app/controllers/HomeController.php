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

	public function postMessages()
	{
		$rules = array(
        	'message' => 'required',
        	'ville' => 'required'
    	);
		dd(Input::all());
		die();
		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails()) {
			return Redirect::to('/messages')
            ->withErrors($validator);
		}
		else{
			DB::table('message')->insert(
   				array('message' => Input::get('message'), 'ville' => Input::get('ville'))
			);
		}	
	}

	public function showActu()
	{
		return View::make('actu');
	}

	public function showMap()
	{
		$position = Position::all();
		return View::make('map')
			->with('position',$position->toJson());
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
