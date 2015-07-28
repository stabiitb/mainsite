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

	public function links()
	{
		return View::make('linkpage');
	}
	
	public function aeromodelling_club($page="about")
	{
		if($page=='about')
			return View::make('club.aero.home');
		else if($page=='team'){
			$data = $this->update_script("Aeromodelling Club");
			$managers = $data[0];
			$conveners = $data[1];
			$cl = 'aero';
			return View::make('update_script',compact('cl','managers','conveners'));
		}
		else if($page=='vision')
			return View::make('club.aero.vision');
		else if($page=='event')
			return View::make('club.aero.event');
		else if ($page=='gallery') 
			return View::make('club.aero.gallery');
		else if ($page=='video') 
			return View::make('club.aero.video');
		else if ($page=='video')
			return View::make('club.aero.video');
		else return View::make('club.aero.home');
	}
	public function electronics_club($page="about")
	{
		if($page=='about')
			return View::make('club.elec.home');
		else if($page=='team'){
			$data = $this->update_script("Electronics Club");
			$managers = $data[0];
			$conveners = $data[1];
			$cl = 'elec';
			return View::make('club.club_team',compact('cl','managers','conveners'));
		}
		else if($page=='event')
			return View::make('club.elec.event');
		else if ($page=='gallery') 
			return View::make('club.elec.gallery');
		else if ($page=='video') 
			return View::make('club.elec.video');
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
		else if($page=='team'){
			$data = $this->update_script("Krittika");
			$managers = $data[0];
			$conveners = $data[1];
			$cl = 'krittika';
			return View::make('club.club_team',compact('cl','managers','conveners'));
		}
		else if($page=='vision')
			return View::make('club.krittika.vision');
		else if($page=='event')
			return View::make('club.krittika.event');
		else if($page=='the-cosmic-ladder-distance')
			return View::make('club.krittika.events.cosmic_ladder');
		else if ($page=='gallery') 
			return View::make('club.krittika.gallery');
		else if ($page=='video') 
			return View::make('club.krittika.video');
		else if($page=='astronomy-demystified')
			return View::make('club.krittika.events.astronomy-demystified');
		else
			return View::make('club.krittika.home');
	}

	public function MnP($page="about")
	{
		if($page=='about')
			return View::make('club.mnp.home');
		else if($page=='team'){
			$data = $this->update_script("MnP Club");
			$managers = $data[0];
			$conveners = $data[1];
			$cl = 'mnp';
			return View::make('club.club_team',compact('cl','managers','conveners'));
		}
		else if($page=='vision')
			return View::make('club.mnp.vision');
		else if ($page=='gallery') 
			return View::make('club.mnp.gallery');
		else if ($page=='video') 
			return View::make('club.mnp.video');
		else if($page=='event')
			return View::make('club.mnp.event');
		else
			return View::make('club.mnp.home');
	}

	public function robotics_club($page="about")
	{
		if($page=='about')
			return View::make('club.robo.home');
		else if($page=='team'){
			$data = $this->update_script("Robotics Club");
			$managers = $data[0];
			$conveners = $data[1];
			$cl = 'robo';
			return View::make('club.club_team',compact('cl','managers','conveners'));
		}
		else if($page=='vision')
			return View::make('club.robo.vision');
		else if ($page=='gallery') 
			return View::make('club.robo.gallery');
		else if ($page=='video') 
			return View::make('club.robo.video');
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
		else if($page=='team'){
			$data = $this->update_script("WnCC");
			$managers = $data[0];
			$conveners = $data[1];
			$cl = 'wncc';
			return View::make('club.club_team',compact('cl','managers','conveners'));
		}
		else if($page=='vision')
			return View::make('club.wncc.vision');
		else if ($page=='gallery') 
			return View::make('club.wncc.gallery');
		else if ($page=='video') 
			return View::make('club.wncc.video');
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

	public function update_script($club)
	{
		
		$file = fopen(public_path()."/assets/team_details.csv","r");
		while(!feof($file)){
			$csv = fgetcsv($file);
			if($csv[0]==$club){
				break;
			}
		}
		//return $csv[0];

		$managers = array();
		$conveners =array();

		$csv = fgetcsv($file);
		if($csv[0]!="Manager"){
			return 'Error';
		}

		$csv = fgetcsv($file);
		while ($csv[0]!="Conveners") {
			# code...
			$managers[] = $csv;

			if(!feof($file)){
				$csv = fgetcsv($file);
			}
			else{
				break;
			}
		}

		if(!feof($file)){
			$csv = fgetcsv($file);
			while ($csv[1]!="") {
				# code...
				$conveners[] = $csv;
				if(!feof($file)){
					$csv = fgetcsv($file);
				}
				else{
					break;
				}
			}
		}
		return [$managers,$conveners];
	}

	function update_server($code){
		if (Auth::check() ){
			if(Auth::User()->admin==1){
			  if ($code=="gpl"){
			  	$code ="git pull origin master";
			  }
			  if ($code=="gps"){
			  	$code ="git push origin master";
			  }
		      $message=shell_exec($code);
      		  echo ($message);
			}
			else{
     		  echo "who the hell are you";
			}
		}
		else{
			echo "Please login.";
		}
	}

}
