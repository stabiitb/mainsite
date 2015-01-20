<?php
use Illuminate\Support\MessageBag;
class EventController extends BaseController {

	public function jan_2015($value='')
	{
		return View::make('events.2015.jan');
	}

	public function elec_CMOS_Challenge_show(){
		return View::make('club.elec.CMOS_challenge');
	}

	public function elec_CMOS_Challenge_add(){
		
		$no =  md5(sizeof(DB::table('CMOS_challenge_users')->get())+1);

		if (Input::hasFile('solution'))
		{
			$file = Input::file('solution');
			$destinationPath=public_path().'/media/2014/elec/CMOS';
			$filename = $no.'.'.$file->getClientOriginalExtension();
			
			$file->move($destinationPath, $filename);

			$path = 'media/2014/elec/CMOS/'.$filename;
		}

		DB::table('CMOS_challenge_users')->insert(
		    array('name' => Input::get('name'),
		    	'roll' => Input::get('roll'),
		    	'semester' => Input::get('semester'),
		    	'program' => Input::get('program'),
		    	'difficulty' => Input::get('difficulty'),
		    	'feedback' => Input::get('feedback'),
		    	'abstract_path' => $path
		    	)
		);

		$messageBag = new MessageBag;
		$messageBag->add('message', 'Successfully Registered ');
		return Redirect::back()->with('messages', $messageBag);
	}

	public function elec_CMOS_Challenge_all(){
		$all=DB::table('CMOS_challenge_users')->get();
		View::share('all',$all);
		return View::make('club.elec.CMOS_challenge_all');
	}
}

