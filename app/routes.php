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

Route::get('/', function() {
	return View::make('under-construction');
});

// This route is for updating the local site repository
Route::get('git/pull', function() {
	// http://jondavidjohn.com/blog/2012/10/git-pull-from-a-php-script-not-so-simple
	$shellOutput = shell_exec('git pull 2>&1');
	return View::make(
		'templates/site-content',
		array(
			'site_content' => '<h2>GIT Pull</h2><pre>'.$shellOutput.'</pre>'
		)
	);
});

Route::get('test', function() {
	return View::make('test');
});

Route::get('profile', array(
	'before' => 'auth',
	'users' => 'UserController@showProfile'
));

Route::get('profile', 'UserController@showProfile');

Route::get('users', 'UserController@getIndex');

Route::get('users/{id}', 'UserController@showProfile');
