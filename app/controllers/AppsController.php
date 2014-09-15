<?php
use Illuminate\Support\MessageBag;
class AppsController extends Controller {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
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
