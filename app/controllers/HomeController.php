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

	public function home()
	{
		return View::make('mainpage');
	}
	public function aeromodelling_club()
	{
		return View::make('mainpage');
	}
	public function electronics_club()
	{
		return View::make('club.elec');
	}
	public function krittika()
	{
		return View::make('mainpage');
	}

	public function MnP()
	{
		return View::make('mainpage');
	}

	public function robotics_club($page="about")
	{
		if($page=='about')
			return View::make('club.robo');
		else if($page=='team')
			return View::make('club.robo.team');
		else
			return View::make('club.robo');
	}
	public function wncc()
	{
		return View::make('mainpage');
	}
	public function technovation()
	{
		return View::make('mainpage');
	}
	public function vision()
	{
		return View::make('vision');
	}
}
