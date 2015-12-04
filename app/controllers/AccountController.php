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
			'email'      => 'Required' ,
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

			if (Auth::attempt(array('email' => Input::get('email'), 'password' => Input::get('password'))))
			{
				// Redirect to the users page.
				//
				return Redirect::to('/position')->with('success', 'You have logged in successfully');
			}
			else
			{
				// Redirect to the login page.
				//
				return Redirect::to('account/login')->with('error', 'Email/password invalid.');
			}
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
			return View::make('/position')->with('user', Auth::user());
		}

		return View::make('/');
	}

	/**
	 * Login form processing.
	 *
	 * @access   public
	 * @return   Redirect
	 */

	public function postPos()
	{
		$rules = array(
        	'ville' => 'required',
        	'lat' => 'required|numeric',
        	'long' => 'required|numeric'
    	);

		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails()) {
			return Redirect::to('position')
            ->withErrors($validator);
		}
		else{
			DB::table('position')->insert(
   				array('label' => Input::get('ville'), 'lng' => Input::get('long'), 'lat' => Input::get('lat'))
			);
			return Redirect::to('position')
			->with('success',"Position ajoutée");
		}	
	}

	public function getModerer()
	{
		// Are we logged in?
		//
		if (Auth::check())
		{
			return View::make('/moderer')->with('messages', Message::all());
		}

		return View::make('/');
	}

	/**
	 * Login form processing.
	 *
	 * @access   public
	 * @return   Redirect
	 */

	public function postModerer($id)
	{
		$mess = Message::where('id','=',$id);
		if(Input::get('modifier') !== null){
			if($mess->active == 1)
				$mess->update(array('active' => 0));
			else
				$mess->update(array('active' => 1));
		}
		else
		{
			$mess->delete();
		}
		return Redirect::to('moderer')->with('success', 'Logged out with success!');
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
