<?php

class HomeController extends BaseController {

	public $layout = 'layouts.dashboard';

	/*
	|--------------------------------------------------------------------------
	| getDashboard
	|--------------------------------------------------------------------------
	*/

	public function getDashboard()
	{
		// Is the user logged in?
		if (!Sentry::check())
		{
			return Redirect::route('/');
		}

		$user = User::find(Sentry::getUser()->id);

		$this->layout->nest('body','dashboard.welcome',array('title'=>'Welcome $user->first_name'));

	}


}
