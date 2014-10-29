<?php
use Illuminate\Support\MessageBag;
use Illuminate\Auth\UserInterface;
class UserController extends Controller {

	public function ManagerAuth()
	{
		$password=Input::get("password");
		
		
		if($password=="Manager@SSTep")
		{
			Session::put('admin', '1');
		}

		$messageBag = new MessageBag;
		$messageBag->add('message', "Password Error");
		return Redirect::back()
			->with('messages', $messageBag);

	}

	public function ManagerLogout()
	{
		Session::forget('admin');
		return Redirect::back();
	}

}
