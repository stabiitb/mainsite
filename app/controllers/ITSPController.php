<?php

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
		//$id=Input::get("ldapId");
		$name=Input::get("name");
		$passwd=Input::get("passwd");
		$roll=Input::get("roll");
		$team=Input::get("team");
		$gmail=Input::get("gmailId");
		$club=Input::get("club");
		$abstract=Input::file("abstract");
		//echo $abstract->path;
		$phone=Input::get("phone");
		//echo Input::hasFile("abstract");
		//echo $gmail."\n";
		//echo $id." ".$passwd." ".$roll." ".$gmail." ".$club." ".$team;
		//echo ldap_auth($id,$passwd)."\n";
		if(Input::hasFile("abstract") && $name!="" && $passwd!="" && $team!="" && $gmail!="" && $club!="" && $roll!="" && $phone!="" )
		{	
			$extension = $abstract->getClientOriginalExtension();
			if($extension=="pdf"){
				//$user=new ITSPUser;
				$dest=public_path()."/media/ITSP2015/qwrerttfaytfdyagadsaghgadugye2363613b/abstract/".$club;
				$fileName=$team."_".$roll."_".$name."_".$passwd.".pdf";
				$destName=$dest."/".$fileName;			
				//$user->saveFromInput(Input::all(),$destName);
				//$user->save();

				if(!file_exists($dest)){
					mkdir($dest);
				}
				$destinationPath=public_path()."/media/ITSP2015/qwrerttfaytfdyagadsaghgadugye2363613b/abstract/".$club."/";
				$abstract->move($destinationPath, $fileName);
				return "Abstract Submitted successfully. To resubmit Abstract use the same name, team name, roll Number and passkey.";
			}
			return "Submission failed. Submit abstract in pdf format.";
		}
		return "Error in details. Resubmit the form.";
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
