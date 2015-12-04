<?php

class AccountController extends AuthorizedController
{
	/**
	 * Let's whitelist all the methods we want to allow guests to visit!
	 *
	 * @access   protected
	 * @var      array
	 */
	protected $whitelist = array(
		'getIndex',
		'postIndex',
		'getPost',
		'postPost'	
	);

	/**
	 * Main users page.
	 *
	 * @access   public
	 * @return   View
	 */
	public function getIndex()
	{
		// Show the page.
		//
		return View::make('account/login')->with('user', Auth::user());
	}

	/**
	 *
	 *
	 * @access   public
	 * @return   Redirect
	 */
	public function postIndex()
	{
		// Declare the rules for the form validation.
		//
		$rules = array(
			'email'      => 'Required|Email' ,
			'password' => 'Required'
		);

		// Get all the inputs.
		//
		$inputs = Input::all();

		// Validate the inputs.
		//
		$validator = Validator::make($inputs, $rules);

		// Check if the form validates with success.
		//
		if ($validator->passes())
		{

			// Redirect to the register page.
			//
			return Redirect::to('/position')->with('success', 'Connecté !');
		}

		// Something went wrong.
		//
		return Redirect::to('account/login')->withInput($inputs)->withErrors($validator->getMessageBag());
	}

	/**
	 * Login form page.
	 *
	 * @access   public
	 * @return   View
	 */
	public function getPos()
	{
		// Are we logged in?
		//
		if (Auth::check())
		{
			return Redirect::to('/position')->with('user', Auth::user());
		}

		// Show the page.
		//
		return View::make('account/login');
	}

	/**
	 * Login form processing.
	 *
	 * @access   public
	 * @return   Redirect
	 */

	public function postLPos()
	{
		$rules = array(
        	'ville' => 'required',
        	'lat' => 'required|numeric',
        	'long' => 'required|numeric'
    	);

		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails()) {
			return Redirect::to('/position')
            ->withErrors($validator);
		}
		else{
			DB::table('position')->insert(
   				array('ville' => Input::get('ville'), 'lng' => Input::get('long'), 'lat' => Input::get('lat'))
			);
			return Redirect::to('/position')
			->with('success',"Position ajoutée");
		}	
	}

	/**
	 * Logout page.
	 *
	 * @access   public
	 * @return   Redirect
	 */
	public function getLogout()
	{
		// Log the user out.
		//
		Auth::logout();

		// Redirect to the users page.
		//
		return Redirect::to('account/login')->with('success', 'Logged out with success!');
	}
}
