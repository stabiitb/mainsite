<?php
use Illuminate\Support\MessageBag;
class AppsController extends Controller {


	// Smart CAMPUS
	public function smart_campus_home($page="home"){

		switch ($page) {
			case 'home':
				return View::make('events.smartcampus.home');
				break;

			case 'instruction':
				return View::make('events.smartcampus.instruction');
				break;
			case 'faq':
				return View::make('events.smartcampus.faq');
				break;
			case 'register':
				return View::make('events.smartcampus.register');
				break;
			case 'contact':
				return View::make('events.smartcampus.contact');
				break;
			case 'all-team':
				$all = DB::table('smartcampus_users')->get();
				View::share('teams',$all);
				return View::make('events.smartcampus.teams');
				break;
			case 'associations':
				return View::make('events.smartcampus.assoc');
				break;
			default:
				return View::make('events.smartcampus.home');
				break;
		}
		
	}

	public function smart_campus_register(){
		$user=new SmartcampusUser;
		$user->saveFromInput(Input::all());
		$user->save();

		$messageBag = new MessageBag;
		$messageBag->add('message', 'Successfully Registered <br> your team id is : '.$user->id);
		return Redirect::back()->with('messages', $messageBag);
	}
	public function smart_campus_abstract(){
		$id=Input::get('id');
		$team=DB::table('smartcampus_users')->where('id','=',$id)->first();
		if($team==NULL)
			return Redirect::back();

		$dest=public_path()."/media/2014/smartcampus";
		if (Input::hasFile('abstract'))
		{
			$ext = Input::file('abstract')->getClientOriginalExtension();
			$name="abstract-".$id.".".$ext;
		    Input::file('abstract')->move($dest, $name);
		    DB::table('smartcampus_users')->where('id','=',$id)->update(array('abstract_path'=>"/media/2014/smartcampus/".$name));
		    return Redirect::back();
		}
		else{
			return Redirect::back();
		}
		
	}
	public function expo_view()
	{
		return View::make('expo.register');
	}
	// Function to save registration for tech and RnD expo
	public function expo_save()
	{
		$messageBag = new MessageBag;
		$current=DB::table('techexpo_users')->where('team_id','=', Input::get('team_id'))->get();
		if(sizeof($current)>0)
		{
			$messageBag->add('type', 'alert-error red-bg');
			$messageBag->add('message', 'Your team is already registered');
			return Redirect::back()->with('messages', $messageBag);
		}
		$newuser=new ExpoUser;
		$newuser->saveFromInput(Input::all());
		$newuser->save();


		if(Request::server('SERVER_NAME')!='localhost'){

			Mail::send('email.tech_rnd',Input::all(), function($message)
			{
				$message->from('stab.iitb@gmail.com.com', 'Stab IIT Bombay');
			    $message->to('chiragcshetty@gmail.com')->subject('[STAB IITB] New registration for Tech and Rnd Expo');
			});
		}

		$messageBag->add('type', 'alert-success green-bg');
		$messageBag->add('message', 'Successfully registered for Tech and RnD Expo');
		return Redirect::back()->with('messages', $messageBag);
	}
	public function expo_all()
	{
		$all=DB::table('techexpo_users')->get();
		View::share('all',$all);
		return View::make('expo.all');

	}



}
