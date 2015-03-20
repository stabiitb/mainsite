<?php
use Illuminate\Support\MessageBag;
use Illuminate\Auth\UserInterface;
class UserController extends Controller {

	public function ManagerAuth()
	{
		$password=Input::get("password");
		
<<<<<<< HEAD
		
		if($password=="Manager@SSTep")
=======
		$sstep_pass = DB::table('env')->where('id' , '=', 'sstep_pass')->first();
		
		if($password==$sstep_pass->val)
>>>>>>> 41246fb85f7912c92291d68f37c056b93847db85
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
