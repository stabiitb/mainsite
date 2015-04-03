<?php
use Illuminate\Support\MessageBag;

class ITSPController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

/*	public function urls()
	{
	    Route::get('register',array('as'=>'events.ITSP.form','uses'=>'ITSPController@form'));
	}*/

	public function form()
	{
		return View::make('events.ITSP_2015.form');
	}

	public function index()
	{
		return View::make('events.ITSP_2015.index');
	}

	public function faq()
	{
		return View::make('events.ITSP_2015.faq');
	}

	public function mentor()
	{
		return View::make('events.ITSP_2015.mentor');
	}

	public function timeline()
	{
		return View::make('events.ITSP_2015.timeline');
	}

	public function about()
	{
		return View::make('events.ITSP_2015.about');
	}

	public function abs()
	{
		return View::make('events.ITSP_2015.abstract');
	}

	public function auth()
	{	
		//$
		$team_name=Input::get("team_name");
		$project_name=Input::get("project_name");
		$club=Input::get("club");
		$slot=Input::get("slot");
		$t1_name=Input::get('t1_name');
		$t1_email=Input::get('t1_email');
		$t1_roll=Input::get('t1_roll');
		$t1_hostel=Input::get('t1_hostel');
		$t1_dept=Input::get('t1_dept');
		$t1_contact=Input::get('t1_contact');
		$abstract=Input::file("abstract");
		$id=Input::get('id');

		if(!Input::hasFile("abstract") || $team_name=="" || $project_name=="" || $club=="" ||$slot==""||$t1_name==""||$t1_roll=="" || $t1_contact=="" ||$t1_hostel==="" || $t1_dept=="" ||$t1_email==""){

			$messageBag = new MessageBag;
			$messageBag->add('message',"Error in form. Fill up all the required fields." );
			return Redirect::back()->with('messages', $messageBag)->withInput();
		}


		if($id==""){
			$extension = $abstract->getClientOriginalExtension();
			if($extension=="pdf"){
				$newTeam=new ITSP;
				$newTeam->saveFromInput(Input::all());
				//$user=new ITSPUser;
				$webpath="http://stab-iitb.org/media/ITSP2015/qwrerttfaytfdyagadsaghgadugye2363613b/abstract/".$club;
				$dest=public_path()."/media/ITSP2015/qwrerttfaytfdyagadsaghgadugye2363613b/abstract/".$club;
				$fileName=$team_name."_".$project_name."_".$newTeam->id.".pdf";
				$destName=$dest."/".$fileName;
				$newTeam->abstract=$webpath.'/'.$fileName;
				$newTeam->user_id=Auth::User()->id;
				$newTeam->save();

				//$user->saveFromInput(Input::all(),$destName);
				//$user->save();

				if(!file_exists($dest)){
					mkdir($dest,0777,true);
				}
				$destinationPath=public_path()."/media/ITSP2015/qwrerttfaytfdyagadsaghgadugye2363613b/abstract/".$club."/";
				$abstract->move($destinationPath, $fileName);
				$messageBag = new MessageBag;
				$messageBag->add('message',"Abstract successfully submitted. Your Team id is ".$newTeam->id.". Remember this for future reference. If you need to change your abstract, refill the entire form with same team name, team id and roll number" );
				return Redirect::back()->with('messages', $messageBag)->withInput();
			}
				$messageBag = new MessageBag;
				$messageBag->add('message',"Submission failed. Submit abstract in pdf format." );
				return Redirect::back()->with('messages', $messageBag)->withInput();
			}
		else{
			$team=ITSP::find(Input::get('id'));
			if(is_null($team)){
				$messageBag = new MessageBag;
				$messageBag->add('message',"Wrong Id" );
				return Redirect::back()->with('messages', $messageBag)->withInput();
			}
			else{				
			 	if(Input::get('team_name')==$team->team_name &&$team->t1_roll ==Input::get('t1_roll')){
					
					$extension = $abstract->getClientOriginalExtension();
					if($extension=="pdf"){
						//$user=new ITSPUser;
						ITSP::where('id','=',$id)->first()->saveFromInput(Input::all());

						$dest=public_path()."/media/ITSP2015/qwrerttfaytfdyagadsaghgadugye2363613b/abstract/".$club;
						$fileName=$team_name."_".$project_name."_".$team->id.".pdf";
						$destName=$dest."/".$fileName;			
						$webpath="http://stab-iitb.org/media/ITSP2015/qwrerttfaytfdyagadsaghgadugye2363613b/abstract/".$club;

						$newTeam->abstract=$webpath.'/'.$fileName;
						$team->user_id=Auth::User()->id;

						$team->save();
						if(!file_exists($dest)){
							mkdir($dest,0777,true);
						}
						$destinationPath=public_path()."/media/ITSP2015/qwrerttfaytfdyagadsaghgadugye2363613b/abstract/".$club."/";
						$abstract->move($destinationPath, $fileName);
						$messageBag = new MessageBag;
						$messageBag->add('message',"Abstract successfully submitted. Your Team id is ".$newTeam->id.". Remember this for future reference. If you need to change your abstract, refill the entire form with same team name, team id and roll number" );
						return Redirect::back()->with('messages', $messageBag)->withInput();
					}
					$messageBag = new MessageBag;
					$messageBag->add('message',"Submission failed. Submit abstract in pdf format." );
					return Redirect::back()->with('messages', $messageBag)->withInput();
				
				}
			
				$messageBag = new MessageBag;
				$messageBag->add('message',"Wrong combination of Id and team details." );
				return Redirect::back()->with('messages', $messageBag)->withInput();


			}
		

		}

	}

	public function test(){

		$key = 'Prateek';
		$string ='6';

		$encrypted = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($key), $string, MCRYPT_MODE_CBC, md5(md5($key))));
		$decrypted = rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, md5($key), base64_decode($encrypted), MCRYPT_MODE_CBC, md5(md5($key))), "\0");

		echo $encrypted."\t";
		echo $decrypted;
	}

	/*public function signup(Request $request)
	{

		$gpoid=Input::get("gpoEmail");
		$gpopw=Input::get("gpoPasswd");
		$gpoid=Input::get("teamId");
		$gpoid=Input::get("passwd");

		Schema


		

		$sstep_pass = DB::table('env')->where('id' , '=', 'sstep_pass')->first();
		
		if($password==$sstep_pass->val)
		{
			Session::put('admin', '1');
		}

		$messageBag = new MessageBag;
		$messageBag->add('message', "Password Error");
		return Redirect::back()
			->with('messages', $messageBag);

	}*/
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
