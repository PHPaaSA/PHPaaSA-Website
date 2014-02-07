<?php

class UserController extends BaseController {

	/**
	 * Instantiate a new UserController instance.
	 */
	public function __construct()
	{
		$this->beforeFilter('auth');

		$this->beforeFilter('csrf', array('on' => 'post'));

		$this->afterFilter('log', array('only' =>
			array('fooAction', 'barAction')));
	}

	/**
	 * Show the profile for the given user.
	 */
	public function showProfile($id)
	{
		$user = User::find($id);

		return View::make('user.profile', array('user' => $user));
	}

	public function getIndex()
	{
		return 'Index';
	}

}