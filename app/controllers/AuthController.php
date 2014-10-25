<?php

class AuthController extends BaseController 
{
	

	public $layout = 'layouts.base';

	public function singout()
	{
		Sentry::logout();
		return Redirect::to('/');
	}
	public function authenticate()
	{
		
		try
		{
		    // Set login credentials
		    $credentials = array(
      			'email'    => Input::get('email'),
	        	'password' => Input::get('password'),
		    );

		    // Try to authenticate the user
		    $user = Sentry::authenticate($credentials, false);

		    $redirect = Session::get('loginRedirect', 'dashboard');

		    Session::forget('loginRedirect');
		    return Redirect::to($redirect);
		}
		catch (Cartalyst\Sentry\Users\LoginRequiredException $e)
		{
		    Session::put('alert-class', 'alert-danger');
        	return Redirect::to('/')->with('message', 'Login field is required.')->withInput();
		}
		catch (Cartalyst\Sentry\Users\PasswordRequiredException $e)
		{
		    Session::put('alert-class', 'alert-danger');
        	return Redirect::to('/')->with('message', 'Password field is required.')->withInput();
		}
		catch (Cartalyst\Sentry\Users\WrongPasswordException $e)
		{
		    Session::put('alert-class', 'alert-danger');
        	return Redirect::to('/')->with('message', 'Wrong password, try again or <a href="/reset-password">click here</a> to reset you password.')->withInput();
		}
		catch (Cartalyst\Sentry\Users\UserNotFoundException $e)
		{
		    Session::put('alert-class', 'alert-danger');
        	return Redirect::to('/')->with('message', 'User was not found.')->withInput();
		}
		catch (Cartalyst\Sentry\Users\UserNotActivatedException $e)
		{
		    Session::put('alert-class', 'alert-danger');
        	return Redirect::to('/')->with('message', 'User is not activated.')->withInput();
		}

		// The following is only required if throttle is enabled
		catch (Cartalyst\Sentry\Throttling\UserSuspendedException $e)
		{
		    Session::put('alert-class', 'alert-danger');
        	return Redirect::to('/')->with('message', 'Your account has been suspended for 15 minutes. Please try again later.')->withInput();
		}
		catch (Cartalyst\Sentry\Throttling\UserBannedException $e)
		{
		    Session::put('alert-class', 'alert-danger');
        	return Redirect::to('/')->with('message', 'User is banned.')->withInput();
		}

	}
	
}