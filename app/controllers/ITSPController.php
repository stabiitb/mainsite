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
		$user=Auth::User();
		//$id=Input::get("ldapId");
		$team_name=Input::get("team_name");
		$project_name=Input::get("project_name");
		$slot=Input::get("slot");
		$t1_name=Input::get("t1_name");
		$t1_roll=Input::get("t1_roll");
		$t1_contact=Input::get("t1_contact");
		$t1_hostel=Input::get("t1_hostel");
		$t1_email=Input::get("t1_email");
		$t2_name=Input::get("t2_name");
		$t2_roll=Input::get("t2_roll");
		$t2_contact=Input::get("t2_contact");
		$t2_hostel=Input::get("t2_hostel");
		$t2_email=Input::get("t2_email");
		$t3_name=Input::get("t3_name");
		$t3_roll=Input::get("t3_roll");
		$t3_contact=Input::get("t3_contact");
		$t3_hostel=Input::get("t3_hostel");
		$t3_email=Input::get("t3_email");
		$t4_name=Input::get("t4_name");
		$t4_roll=Input::get("t4_roll");
		$t4_contact=Input::get("t4_contact");
		$t4_hostel=Input::get("t4_hostel");
		$t4_email=Input::get("t4_email");

		$club=Input::get("club");
		$abstract=Input::file("abstract");
		if(!Input::hasFile('abstract') || $team_name =="" || $project_name =="" || $slot =="" || $club =="" || $t1_name =="" || $t1_email=="" || $t1_roll==""||$t1_contact==""||$t1_hostel==""){
			
		$messageBag = new MessageBag;
		$messageBag->add('message', 'Error in details. Fill all the required fields.');
		return Redirect::back()->with('messages', $messageBag);
		}

		$extension = $abstract->getClientOriginalExtension();
		if($extension=="pdf"){
			//$user=new ITSPUser;
			$dest=public_path()."/media/ITSP2015/qwrerttfaytfdyagadsaghgadugye2363613b/abstract/".$club;
			$fileName=$team_name."_".$project_name."_".$user->id.".pdf";
			$destName=$dest."/".$fileName;			
			//$user->saveFromInput(Input::all(),$destName);
			//$user->save();

			if(!file_exists($dest)){
				mkdir($dest);
			}
			$destinationPath=public_path()."/media/ITSP2015/qwrerttfaytfdyagadsaghgadugye2363613b/abstract/".$club."/";
			$abstract->move($destinationPath, $fileName);
			$messageBag = new MessageBag;
			$messageBag->add('message', 'Form filled successfully. To change the abstract, refill the form with the same team, project name and same account.');
			return Redirect::back()->with('messages', $messageBag);	
		}
		else{
			$messageBag = new MessageBag;
			$messageBag->add('message', 'Submission failed. Submit abstract in pdf format.');
			return Redirect::back()->with('messages', $messageBag);	
		}
		//echo $abstract->path;
		//$phone=Input::get("phone");
		//echo Input::hasFile("abstract");
		//echo $gmail."\n";
		//echo $id." ".$passwd." ".$roll." ".$gmail." ".$club." ".$team;
		//echo ldap_auth($id,$passwd)."\n";

		//$fileName=$club."_".$team."_".$roll.".pdf";
		//$destinationPath=public_path()."/media/ITSP2015/qwrerttfaytfdyagadsaghgadugye2363613b/abstract/";
		//echo $destinationPath;		
		//$abstract->move($destinationPath, $fileName);
		//return $abstract;


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
