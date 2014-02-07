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

Route::get('/', function()
{
	return View::make('under-construction');
});

Route::get('profile', array('before' => 'auth',
	'users' => 'UserController@showProfile'));

// Route::controller('company', 'CompanyController');

// Route::get('users', 'UserController@getIndex');

Route::get('users', function()
{
	return View::make('users');
});

Route::get('users/{id}', 'UserController@showProfile');
