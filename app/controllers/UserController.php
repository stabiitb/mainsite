<?php
use Illuminate\Support\MessageBag;
use Facebook\FacebookSession;
use Facebook\FacebookRequest;
use Facebook\GraphUser;
use Facebook\FacebookRequestException;
use Facebook\FacebookRedirectLoginHelper;

// class Table {

//     protected $table = null;
//     protected $header = null;
//     protected $attr = null;
//     protected $data = null;

//     public function __construct($data = null, $attr = null, $header = null)
//     {
//         if(is_null($data)) return;
//         $this->data = $data;
//         $this->attr = $attr;
//         if(is_array($header)) {
//             $this->header = $header;
//         }
//         else {
//             if(count($this->data) && $this->is_assoc($this->data[0]) || is_object($this->data[0])) {
//                 $headerKeys = is_object($this->data[0]) ? array_keys((array)$this->data[0]) : array_keys($this->data[0]);
//                 $this->header = array();
//                 foreach ($headerKeys as $value) {
//                     $this->header[] = $value;
//                 }
//             }
//         }
//         return $this;
//     }

//     public function build()
//     {
//         $atts = '';
//         if(!is_null($this->attr)) {
//             foreach ($this->attr as $key => $value) {
//                 $atts .= $key . ' = "' . $value . '" ';
//             }
//         }
//         $table = '<table ' . $atts . ' >';

//         if(!is_null($this->header)) {
//             $table .= '<thead><tr>';
//             foreach ($this->header as $value) {
//                 $table .= '<th>' . ucfirst($value) . '</th>';
//             }
//             $table .= '</thead></tr>';
//         }

//         $table .= '<tbody>';
//         foreach ($this->data as $value) {
//             $table .= $this->createRow($value);
//         }
//         $table .= '</tbody>';
//         $table .= '</table>';
//         return $this->table = $table;
//     }

//     protected function createRow($array = null)
//     {	
//     	$count=0;
//         if(is_null($array)) return false;
//             $row = '<tr>';
//             foreach ($array as $value) {
//             	if($count==3)$row .= '<td><a href="' . $value . '">'.$value.'</a></td>';
//             	else{
//                 $row .= '<td>' . $value . '</td>';}
//                 $count++;
//             }
//             $row .= '</tr>';
//             return $row;
//     }

//     protected function is_assoc($array){
//         return is_array($array) && array_diff_key($array, array_keys(array_keys($array)));
//     }
// }


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
			$messageBag->add('email.absent', 'We are unable to fetch your email id. Go to <a href="https://www.facebook.com/settings?tab=applications"> Fb Setting </a> , search for app "STAB-IITB" , and allow the app to fetch email. ');
     		return Redirect::to('/')
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
		if(Input::has('key')){
			$key='Prateek';
			$encrypted=Input::get('key');
	 		$decrypted=rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, md5($key), base64_decode($encrypted), MCRYPT_MODE_CBC, md5(md5($key))), "\0");
		
			$user=User::find($decrypted);
			if(is_null($user)){
				return "Wrong Key.";
			}
			else{
				User::where('id','=',$decrypted)->update(
				array('ldap_verified'=>1));
				return "Account Successfully verified";
			}
		}
		$user =  Auth::User();
		View::share('user',$user);
		return View::make('user.profile');
	}

	public function edit(){
		$user=Auth::User();
		$user->facad=NULL;
		$user->want_room=NULL;
		$user->save();
		return Redirect::back();
	}
	public function verify(){
		$gpo_id=Input::get('gpo_id');
		$gpo_id = explode('@', $gpo_id)[0];
		$user=Auth::User();
		//var_dump($user);
		$key = 'Prateek';
		$string =$user->id;
		$user->ldap_email=$gpo_id."@iitb.ac.in";
		User::where('id','=',$string)->update(array('ldap_email'=>$gpo_id.'@iitb.ac.in'));

		$encrypted = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($key), $string, MCRYPT_MODE_CBC, md5(md5($key))));
		$decrypted = rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, md5($key), base64_decode($encrypted), MCRYPT_MODE_CBC, md5(md5($key))), "\0");

		//var_dump($encrypted);
		//var_dump($decrypted);
		//echo $gpo_id;
		try {
			 Mail::send('email.verifygpo', ['key' => URL::Route('user.profile').'?key='.urlencode($encrypted),'name'=>$user->Name], function($message) use($user)
			 {
	     		$message->to($user->ldap_email, $user->Name)->subject('Verify Stab Id');
			 });
			$messageBag = new MessageBag;
			$messageBag->add('message',"We have sent you an email regarding account activation on your gpo id ".$user->ldap_email." .Click on the link to verify." );
			return Redirect::Route('user.profile')->with('messages', $messageBag)->withInput();
		} catch (Exception $e) {
			return $e->getMessage();
		}
		
	}

	public function update()
	{
		
		if(Auth::check()){
			$user=Auth::User();
			if(Input::get('name') !="" && Input::get('roll_no') !="" && Input::get('dept') !="" && Input::get('hostel') !="" && Input::get('contact') !="" && Input::get('facad') !="" && Input::get('facad_ldap') !=""){

				$messageBag = new MessageBag;
				$messageBag->add('message',"Form filled successfully." );
				$user->saveFromInput(Input::all());
				$user->save();
				return Redirect::back();		
				}		
			else{
				$messageBag = new MessageBag;
				$messageBag->add('message',"Error in details." );
				return Redirect::back()->with('messages',$messageBag);
			}
		}
		else{
			$messageBag = new MessageBag;
			$messageBag->add('message',"Error in details." );
			return Redirect::back()->with('messages',$messageBag);
		}	
	}

	public function show_users()
		{	if(Auth::check()){
			if(Auth::User()->mentor==1 || Auth::User()->admin==1 || true){
				$users=User::get();
					if( sizeof($users)==0){
						return;
					};
					$users=$users->toArray();
					$attr = array('class'=>'table table-condensed table-hover table-striped table-bordered table-responsive', 'id'=>'myTbl');
					$t = new Table($users, $attr);
					$data= $t->build();
					return View::make('user.show_users',compact('data'));
			}
			return "You dont have required access.";	
		}
		return '<a href="'.UserController::LoginURL().'">Login</a>. to continue';
	}

}