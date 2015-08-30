<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Defaul t Home Controller
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
		else if ($page=='gallery') {
			
			$pics=$this->get_images("aero");
			$cl='aero';
			return View::make('script_gallery',compact('cl','pics'));
		}
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
		else if($page=='vision')
			return View::make('club.elec.vision');
		else if($page=='event')
			return View::make('club.elec.event');
		else if ($page=='gallery') {
			
			$pics=$this->get_images("elec");
			$cl='elec';
			return View::make('script_gallery',compact('cl','pics'));
		}
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
		else if ($page=='gallery') {
			
			$pics=$this->get_images("krittika");
			$cl='krittika';
			return View::make('script_gallery',compact('cl','pics'));
		}
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
		else if ($page=='gallery') {
			
			$pics=$this->get_images("MnP");
			$cl='MnP';
			return View::make('script_gallery',compact('cl','pics'));
		}
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
		else if ($page=='gallery') {
			
			$pics=$this->get_images("robo");
			$cl='robo';
			return View::make('script_gallery',compact('cl','pics'));
		}
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
		else if($page=="tshirt")
			return View::make('club.robo.tshirt');
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
		else if ($page=='gallery') {
			
			$pics=$this->get_images("wncc");
			$cl='wncc';
			return View::make('script_gallery',compact('cl','pics'));
		}
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
	public function get_images($club){
		$pics = array();
		$dir = public_path()."/media/2015/club_assets/$club/Events";
		$dh  = opendir($dir);
		while (false !== ($subdir = readdir($dh))) {
	    	if ($subdir!="." && $subdir!="..")
	    	{	$newdir = "$dir/$subdir/Photos";    		
	    		$newdh  = opendir($newdir);
	    		$pics[] = $subdir;
	    		while (false !== ($image = readdir($newdh))) {
			    	if ($image!="." && $image!="..")
			    	{	
			    		$pics[$subdir][] = $image;
			    	}	
				}
	    	}	
		}
		return $pics;
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

	public function RCPlane_index()
	{
		return View::make('club.aero.RC_Plane.index');
	}
	public function RCPlane_about()
	{
		return View::make('club.aero.RC_Plane.about');
	}
	public function RCPlane_stud_reg()
	{
		return View::make('club.aero.RC_Plane.students_reg');
	}
	public function RCPlane_resources()
	{
		return View::make('club.aero.RC_Plane.resources');
	}

	public function XLR8_index()
	{
		return View::make('club.robo.XLR8_2015.index');
	}

	public function XLR8_faq()
	{
		return View::make('club.robo.XLR8_2015.faq');
	}
	public function XLR8_timeline()
	{
		return View::make('club.robo.XLR8_2015.timeline');
	}
	public function XLR8_about()
	{
		return View::make('club.robo.XLR8_2015.about');
	}
	public function XLR8_discuss()
	{
		return View::make('club.robo.XLR8_2015.discuss');
	}
	public function XLR8_stud_reg()
	{
		return View::make('club.robo.XLR8_2015.students_reg');
	}
	public function XLR8_mentor_reg()
	{
		return View::make('club.robo.XLR8_2015.mentor_reg');
	}
	public function XLR8_mentor_list()
	{
		return View::make('club.robo.XLR8_2015.mentor_list');
	}
	public function XLR8_resources()
	{
		return View::make('club.robo.XLR8_2015.resources');
	}
	function update_server($code){
		if (Auth::check() ){
			if(Auth::User()->admin==1){
			  
			  shell_exec("cd ..");
			  if ($code=="gpl"){
			  	$code ="git pull origin master";
			  }
			  if ($code=="gps"){
			  	$code ="git push origin master";
			  }
			  echo $code;
		      $message=shell_exec("ls");
      		  echo ($message);

		      $message=shell_exec($code);
      		  echo ($message);
      		  echo "yo";
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
