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

	public function aeromodelling_club($page="about")
	{
		if($page=='about')
			return View::make('club.aero.home');
		else if($page=='team')
			return View::make('club.aero.team');
		else if($page=='vision')
			return View::make('club.aero.vision');
		else if($page=='event')
			return View::make('club.aero.event');
		else
			return View::make('club.aero.home');
	}
	public function electronics_club($page="about")
	{
		if($page=='about')
			return View::make('club.elec.home');
		else if($page=='team')
			return View::make('club.elec.team');
		else if($page=='event')
			return View::make('club.elec.event');
		else if($page=='line-follower-registration')
			return View::make('club.elec.lf-register');
		else if($page=='club-initiatives')
			return View::make('club.elec.club_initiative');
		else
			return View::make('club.elec.home');
	}
	public function krittika($page="about")
	{
		if($page=='about')
			return View::make('club.krittika.home');
		else if($page=='team')
			return View::make('club.krittika.team');
		else if($page=='vision')
			return View::make('club.krittika.vision');
		else if($page=='event')
			return View::make('club.krittika.event');
		else if($page=='the-cosmic-ladder-distance')
			return View::make('club.krittika.events.cosmic_ladder');
		else if($page=='astronomy-demystified')
			return View::make('club.krittika.events.astronomy-demystified');
		else
			return View::make('club.krittika.home');
	}

	public function MnP($page="about")
	{
		if($page=='about')
			return View::make('club.mnp.home');
		else if($page=='team')
			return View::make('club.mnp.team');
		else if($page=='vision')
			return View::make('club.mnp.vision');
		else if($page=='event')
			return View::make('club.mnp.event');
		else
			return View::make('club.mnp.home');
	}

	public function robotics_club($page="about")
	{
		if($page=='about')
			return View::make('club.robo.home');
		else if($page=='team')
			return View::make('club.robo.team');
		else if($page=='vision')
			return View::make('club.robo.vision');
		else if($page=='event')
			return View::make('club.robo.event');
		else if($page=="xlr8-registration")
			return View::make('club.robo.xlr8_reg');
		else if($page=="teams-and-mentors-xlr8-2014")
			return View::make('club.robo.xlr8.mentors');
		else if($page=="darpa-projects")
			return View::make('club.robo.Darpa');
		else
			return View::make('club.robo.home');
	}
	public function wncc($page="about")
	{
		if($page=='about')
			return View::make('club.wncc.home');
		else if($page=='team')
			return View::make('club.wncc.team');
		else if($page=='vision')
			return View::make('club.wncc.vision');
		else if($page=='event')
			return View::make('club.wncc.event');
		else
			return View::make('club.wncc.home');
	}


	public function technovation()
	{
		return View::make('technovation');
	}
	public function vision()
	{
		return View::make('vision');
	}

	public function techgc()
	{
		return View::make('home.techgc');
	}
}
