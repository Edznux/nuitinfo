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

		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails()) {
			return Redirect::to('/')
            ->withErrors($validator);
		}
		else{
			DB::table('message')->insert(
   				array('message' => Input::get('message'), 'ville' => Input::get('ville'))
			);
			return Redirect::to('/')
			->with('success',"Merci d'avoir envoyé votre message");
		}	
	}

	public function showActu()
	{
		return View::make('actu')
					->with('position', Position::all())
					->with('messages', Message::all());
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
