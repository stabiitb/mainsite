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
		else if($page=='event'){
			$file = fopen("https://docs.google.com/spreadsheets/d/1tnuJIGHW-tC9jBCBkT0T2FdN-QvIFkVCMjrubi0hDTs/export?format=csv","r");
			// $events=array();
			while(!feof($file)){
				$csv = fgetcsv($file);
				if($csv[0]!="Event Name"&&$csv[0]!=""){
					$events[]=$csv;
				}
			}
			return View::make('club.aero.event',compact('events'));
		}
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
		else if($page=='event'){

			$file = fopen("https://docs.google.com/spreadsheets/d/1YiD_vHJwYnQYWU58DOJEBonDiWgXDvUM2GjtiDx5c1c/export?format=csv","r");
			// $events=array();
			while(!feof($file)){
				$csv = fgetcsv($file);
				if($csv[0]!="Event Name"&&$csv[0]!=""){
					$events[]=$csv;
				}
				
			}
			return View::make('club.elec.event',compact('events'));
		}
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
		else if($page=='event'){

			$file = fopen("https://docs.google.com/spreadsheets/d/1dF9mkE4mqKzh3BoLEVFRpedCnzhckD5VKZQfKGXdC4s/export?format=csv","r");
			// $events=array();
			while(!feof($file)){
				$csv = fgetcsv($file);
				if($csv[0]!="Event Name"&&$csv[0]!=""){
					$events[]=$csv;
				}
				
			}
			return View::make('club.krittika.event',compact('events'));
		}
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
		else if($page=='event'){

			$file = fopen("https://docs.google.com/spreadsheets/d/1uRtl1c3vQYhLKmdWbEImjB4uyWXwMPYpgTcxMZ-PrGs/export?format=csv","r");
			// $events=array();
			while(!feof($file)){
				$csv = fgetcsv($file);
				if($csv[0]!="Event Name"&&$csv[0]!=""){
					$events[]=$csv;
				}
				
			}
			return View::make('club.mnp.event',compact('events'));
		}
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
		else if($page=='event'){

			$file = fopen("https://docs.google.com/spreadsheets/d/1aj4QyEJEE8QgugfSsecs_Q9k0e86N1m1OjFtZnfghwk/export?format=csv","r");
			// $events=array();
			while(!feof($file)){
				$csv = fgetcsv($file);
				if($csv[0]!="Event Name"&&$csv[0]!=""){
					$events[]=$csv;
				}
				
			}
			return View::make('club.robo.event',compact('events'));
		}
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
		else if($page=='event'){

			$file = fopen("https://docs.google.com/spreadsheets/d/1UG5iXKh1DZJvy1mSGBE92Xs_My7wfo_wJLVq-RVloe8/export?format=csv","r");
			// $events=array();
			while(!feof($file)){
				$csv = fgetcsv($file);
				if($csv[0]!="Event Name"&&$csv[0]!=""){
					$events[]=$csv;
				}
				
			}
			return View::make('club.wncc.event',compact('events'));
		}
		else
			return View::make('club.wncc.home');
	}




	public function techexpo2015($page="about")
	{
		if($page=='about')
			return View::make('events.techexpo.2015.about');
		else if($page=='registration_tech_projects')
			return View::make('events.techexpo.2015.tech_project_reg');
		else if($page=='registration_rnd_projects')
			return View::make('events.techexpo.2015.rnd_project_reg');
		else if ($page=='gallery') {
			$pics=$this->get_images_of_folder("/media/2015/techexpo/gallery_2014");
			return View::make('events.techexpo.2015.script_gallery',compact('pics'));
		}
		else if ($page=='video-gallery') {
			return View::make('events.techexpo.2015.video-gallery');
		}
		else{
			return View::make('events.techexpo.2015.about');
		}
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

	public function get_images_of_folder($folder){
		$pics = array();
		$dir = public_path().$folder;
		$dh  = opendir($dir);
		while (false !== ($image = readdir($dh))) {
	    	if ($image!="." && $image!="..")
	    	{    		
	    		$pics[] = $image;
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

	//Turotials
	public function tutorials()
	{
		$dir = public_path()."/assets/tutorials";
		$dh  = opendir($dir);

		$all_tut = array();
		$all_tut[] = "Maths and Physics";
		$all_tut[] = "Krittika";
		$all_tut[] = "WnCC";
		$all_tut[] = "Robotics";
		$all_tut[] = "Electronics";
		$all_tut[] = "Tech-GSR";
		$all_tut[] = "Technovation";
		$all_tut[] = "Aeromodelling";

		$all_tut["Maths and Physics"][]=TutorialsTable::where('Club','LIKE','%Maths%')->get();
		$all_tut["Krittika"][]=TutorialsTable::where('Club','LIKE','%ttika%')->get();
		$all_tut["WnCC"][]=TutorialsTable::where('Club','LIKE','%WnCC%')->get();
		$all_tut["Robotics"][]=TutorialsTable::where('Club','LIKE','%Robo%')->get();
		$all_tut["Electronics"][]=TutorialsTable::where('Club','LIKE','%tronics%')->get();
		$all_tut["Tech-GSR"][]=TutorialsTable::where('Club','LIKE','%GSR%')->get();
		$all_tut["Technovation"][]=TutorialsTable::where('Club','LIKE','%vation%')->get();
		$all_tut["Aeromodelling"][]=TutorialsTable::where('Club','LIKE','%model%')->get();
		return View::make('tutorials', compact('mnp_tut','all_tut'));
	}
	public function tutorials_save()
	{
		if (Auth::check()){
			if (Auth::User()->ldap_verified == 0){
	     		$messageBag = new MessageBag;
				$messageBag->add('Please Verify Your GPO ID before Uploading a Tutorial');
	     		return Redirect::route('user.profile')->withErrors($messageBag);
			}
			else{
				// $user_id = Auth::User()->id;
				// $name = Input::get("Name");
				// $name = Input::get("Club");

			}
		}
		else{
     		$messageBag = new MessageBag;
			$messageBag->add('Please Login before Uploading a Tutorial');
     		return Redirect::route('login_page')->withErrors($messageBag);
		}

		// if (Input::get("by")!=ITSP::find(Auth::User()->itsp)->user_id){
		// 	return "Error";
		// }

		$uploaddir = public_path()."/assets/tutorials";
		// $uploadfile = $uploaddir . basename("t".$_GET['no'].".png");
		// if (move_uploaded_file($_FILES['img']['tmp_name'], $uploadfile)) {
		// 	return "done";
		// } else {
  //  	 		echo "Possible file upload attack!\n";
		// }
		// return View::make('club.robo.XLR8_2015.resources');
	}

	public function tutorials_upload()
	{
		if (Auth::check()){
			if (Auth::User()->ldap_verified == 0){
	     		$messageBag = new MessageBag;
				$messageBag->add('Please Verify Your GPO ID before Uploading a Tutorial');
	     		return Redirect::route('user.profile')->withErrors($messageBag);
			}
			else{
				$user_id = Auth::User()->id;
				$name = Input::get("Name");
				$name = Input::get("Club");

			}
		}
		else{
     		$messageBag = new MessageBag;
			$messageBag->add('Please Login before Uploading a Tutorial');
     		return Redirect::route('login_page')->withErrors($messageBag);
		}

		// if (Input::get("by")!=ITSP::find(Auth::User()->itsp)->user_id){
		// 	return "Error";
		// }
		
		// $uploaddir = public_path()."/assets/tutorials";
		// $uploadfile = $uploaddir . basename("t".$_GET['no'].".png");
		// if (move_uploaded_file($_FILES['img']['tmp_name'], $uploadfile)) {
		// 	return "done";
		// } else {
  //  	 		echo "Possible file upload attack!\n";
		// }
		// return View::make('club.robo.XLR8_2015.resources');
		// return View::make('tutorials');
	}


}
