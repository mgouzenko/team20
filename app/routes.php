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


Route::get('/', array('as' => '/', function()
{   
	// Is the user logged in?
	if (Sentry::check())
	{
		return Redirect::route('dashboard');
	}

    return View::make('layouts.base')->nest('body', 'auth.signin');
}));
Route::get('/signout','AuthController@singout');
Route::post('/auth','AuthController@authenticate');
Route::get('/dashboard','HomeController@getDashboard');
Route::get('/map','HomeController@getMapView');

