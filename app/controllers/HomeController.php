<?php
use Illuminate\Support\MessageBag;

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

	public static function get_image_link($ss){
		try{
			$base_url = "https://drive.google.com/uc?export=download&id=";
			if($ss!=""){
				if (strpos($ss, 'id') !== false) {
				   		$ss=$base_url.explode("=",$ss)[1];
				}
				else if(strpos($ss,'view?usp=sharing')!==false){
						$ss=$base_url.explode("/",$ss)[5];
				}
			}
			return $ss;
		}
		catch (exception $e){
			return $ss;
		}
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
					$csv[4]=$this->get_image_link($csv[4]);
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
	public function electronics_club($request)
	{
        $sig_check = 'sha1=' . hash_hmac('sha1', $request->getContent(), $_ENV['GITHUB_ELEC_CLUB_SECRET']]);
        if ($sig_check !== $request->header('x-hub-signature'))
            return response(['error' => 'Unauthorized'], 401);

        exec("./ecupdate.sh");
        return response(['status' => 'OK'], 200);
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
					$csv[4]=$this->get_image_link($csv[4]);
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
					$csv[4]=$this->get_image_link($csv[4]);
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
					$csv[4]=$this->get_image_link($csv[4]);
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
			return Redirect::to("http://www.wncc-iitb.org");
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
					$csv[4]=$this->get_image_link($csv[4]);
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

	public function techgc2014()
	{
		return View::make('GCrankings.techgc2014');
	}
	public function techgc2015()
	{
		return View::make('GCrankings.techgc2015');
	}
	public function techgc2016()
	{
		return View::make('GCrankings.techgc2016');
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

	//Tutorials
	public function tutorials()
	{
		$dir = public_path()."/assets/tutorials";
		$dh  = opendir($dir);

		$all_tut = array(
			"Maths and Physics" => array(),
			"Krittika" => array(),
			"WnCC" => array(),
			"Robotics" => array(),
			"Electronics" => array(),
			"Tech-GSR" => array(),
			"Technovation" => array(),
			"Aeromodelling" => array()
		);

		$all_tut["Maths and Physics"]=Tutorials::where('Club','LIKE','%Maths%')->get();
		$all_tut["Krittika"]=Tutorials::where('Club','LIKE','%ttika%')->get();
		$all_tut["WnCC"]=Tutorials::where('Club','LIKE','%WnCC%')->get();
		$all_tut["Robotics"]=Tutorials::where('Club','LIKE','%Robo%')->get();
		$all_tut["Electronics"]=Tutorials::where('Club','LIKE','%tronics%')->get();
		$all_tut["Tech-GSR"]=Tutorials::where('Club','LIKE','%GSR%')->get();
		$all_tut["Technovation"]=Tutorials::where('Club','LIKE','%vation%')->get();
		$all_tut["Aeromodelling"]=Tutorials::where('Club','LIKE','%model%')->get();
		return View::make('tutorials', compact('all_tut'));
	}
	public function tutorials_save()
	{
		if (Auth::check()){
			if (Auth::User()->ldap_verified == 0){
	     		$messageBag = new MessageBag;
				$messageBag->add('message',"Please Verify Your GPO ID before Uploading a Tutorial" );
				return Redirect::Route('user.profile')->with('messages', $messageBag)->withInput();
			}
			else{

				$user_id = Auth::User()->id;
				$name = Input::get("Name");
				$club = Input::get("Club");
				$file = Input::file("File");

				if(!Input::hasFile("File") || $user_id=="" || $name=="" || $club==""){

					$messageBag = new MessageBag;
					$messageBag->add('message',"Error in form. Fill up all the required fields correctly" );

					return Redirect::back()->with('messages', $messageBag)->withInput();
				}
				if (Input::file("File") -> getSize() > 2*1024*1024) {
					$messageBag = new MessageBag;
					$messageBag->add('message',"Files Bigger than 2 MB aren't allowed" );

					return Redirect::back()->with('messages', $messageBag)->withInput();
					
				}


				$tutorial = new Tutorials;

				$tutorial->name = $name;
				$tutorial->by = intval($user_id);
				$tutorial->club = $club;
				// $tutorial->url = $filename;
				$tutorial->save();

				$destinationPath = public_path()."/assets/tutorials/";
				$extension = $file->getClientOriginalExtension();
				// $filename = ($tutorial->id).".".$extension;
				$filename = ($tutorial->id);
				$file->move($destinationPath, $filename);

				// $tutorial->name = $name;
				// $tutorial->by = intval($user_id);
				// $tutorial->club = $club;
				$tutorial->url = $filename;
				$tutorial->save();


				$messageBag = new MessageBag;
				$messageBag->add('message',"Tutorial successfully uploaded." );
				return Redirect::back()->with('messages', $messageBag)->withInput();
				
			}
		}
		else{
     		$messageBag = new MessageBag;
			$messageBag->add('message','Please Login before Uploading a Tutorial');
			return Redirect::Route('user.profile')->with('messages', $messageBag)->withInput();
		}

	
	}

	public function tutorials_upload()
	{
		if (Auth::check()){
			if (Auth::User()->ldap_verified == 0){
	     		$messageBag = new MessageBag;
				$messageBag->add('message',"Please Verify Your GPO ID before Uploading a Tutorial" );
				return Redirect::Route('user.profile')->with('messages', $messageBag)->withInput();
			}
			else{
				return View::make('tutorials_upload');				
			}
		}
		else{
     		$messageBag = new MessageBag;
			$messageBag->add('message','Please Login before Uploading a Tutorial');
			return Redirect::to('login_page')->with('messages', $messageBag)->withInput();
		}
	}


}
