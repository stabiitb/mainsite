<?php
use Illuminate\Support\MessageBag;
use Facebook\FacebookSession;
use Facebook\FacebookRequest;
use Facebook\GraphUser;
use Facebook\FacebookRequestException;
use Facebook\FacebookRedirectLoginHelper;

class UserController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function fblogin()
	{


		$app_id='339712599560349';
		$code=Input::get('code');
		$redirect_url=URL::to('/').'/fblogin';
		$app_secret='3c50091370251ec12e280a7af1952572';
		$token_url = "https://graph.facebook.com/oauth/access_token?"
       . "client_id=" . $app_id . "&redirect_uri=" . urlencode($redirect_url)
       . "&client_secret=" . $app_secret . "&code=" . $code;
    	
    	try{
       	$response = file_get_contents($token_url);	
       }
       catch (Exception $e) {
       		return $e->getMessage();
       }
       $params = null;
     	parse_str($response, $params);
     	$graph_url = "https://graph.facebook.com/me?access_token=" 
       . $params['access_token'];

     	$newUser = json_decode(file_get_contents($graph_url));
   			
     	
     	if(!isset($newUser->email)){
     		$messageBag = new MessageBag;
			$messageBag->add('email.absent', 'We are unable to fetch your email id. Go to <a href="https://www.facebook.com/settings?tab=applications"> Fb Setting </a> , search for app "Infermap" , remove the app and try login again ');
     		return Redirect::back()->withInput()
				->withErrors($messageBag);
     	}

     	$email = $newUser->email;
		$users = User::where('email','=', $email)->get();
	

		if(sizeof($users) == 0){
			$user = new User;
			$user->email = $email;
			$user->name = $newUser->name;
			$user->fbid = $newUser->id;
			$user->save();
			Auth::login($user);
			return Redirect::route('user.profile');
		}
		User::where('id','=',$users[0]->id)
				->update(array('fbid' => $newUser->id));
		
		$user = $users[0];
		Auth::login($user);
		if($user->ldap_verified==0){
			return Redirect::route('user.profile');
		}

     	return Redirect::to('/');
     	
	}
	
	
	// Logout
	public function logout(){
		if(Auth::check()) Auth::logout();
		return Redirect::to('/');
	}

	public static function LoginURL(){
		session_start();
        $redirect_url=URL::to('/').'/fblogin';
        
        FacebookSession::setDefaultApplication('339712599560349', '3c50091370251ec12e280a7af1952572');
        $helper = new FacebookRedirectLoginHelper($redirect_url);
        $loginUrl=$helper->getLoginUrl(array('scope' => 'email'));
        return $loginUrl;
	}

	public function profile(){
		$user =  Auth::User();
		View::share('user',$user);
		return View::make('user.profile');
	}

	public function verify(){
		$gpo_id=Input::get('gpo_id');
		echo $gpo_id;

		Mail::send('email.test', ['key' => 'machau prateek :D'], function($message)
		{
    		$message->to('siddharth.bulia@gmail.com', 'Siddharth bulia')->subject('Welcome!');
		});
	}
}