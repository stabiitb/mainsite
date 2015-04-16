<?php
use Illuminate\Support\MessageBag;

class Table {

    protected $table = null;
    protected $header = null;
    protected $attr = null;
    protected $data = null;

    public function __construct($data = null, $attr = null, $header = null)
    {
        if(is_null($data)) return;
        $this->data = $data;
        $this->attr = $attr;
        if(is_array($header)) {
            $this->header = $header;
        }
        else {
            if(count($this->data) && $this->is_assoc($this->data[0]) || is_object($this->data[0])) {
                $headerKeys = is_object($this->data[0]) ? array_keys((array)$this->data[0]) : array_keys($this->data[0]);
                $this->header = array();
                foreach ($headerKeys as $value) {
                    $this->header[] = $value;
                }
            }
        }
        return $this;
    }

    public function build()
    {
        $atts = '';
        if(!is_null($this->attr)) {
            foreach ($this->attr as $key => $value) {
                $atts .= $key . ' = "' . $value . '" ';
            }
        }
        $table = '<table ' . $atts . ' >';

        if(!is_null($this->header)) {
            $table .= '<thead><tr>';
            foreach ($this->header as $value) {
                $table .= '<th>' . ucfirst($value) . '</th>';
            }
            $table .= '</thead></tr>';
        }

        $table .= '<tbody>';
        foreach ($this->data as $value) {
            $table .= $this->createRow($value);
        }
        $table .= '</tbody>';
        $table .= '</table>';
        return $this->table = $table;
    }

    protected function createRow($array = null)
    {	
    	$count=0;
        if(is_null($array)) return false;
            $row = '<tr>';
            foreach ($array as $value) {
            	if($count==3)$row .= '<td><a href="' . $value . '">'.$value.'</a></td>';
            	else{
                $row .= '<td>' . $value . '</td>';}
                $count++;
            }
            $row .= '</tr>';
            return $row;
    }

    protected function is_assoc($array){
        return is_array($array) && array_diff_key($array, array_keys(array_keys($array)));
    }
}

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
	public function team_update()
	{
		$team=ITSP::find(Auth::User()->itsp);
		$number=Input::get('number');
		$user_id1=Auth::User()->id;
		$user_id2=Input::get('id2');
		$user_id3=Input::get('id3');
		$user_id4=Input::get('id4');

		if($number >4 or $number<0){
			if($number==5 && $user_id1==213){}
			else{	
			$messageBag = new MessageBag;
			$messageBag->add('message','error in team size detail. Reload to refill the form' );
			return Redirect::back()->with('messages', $messageBag);	
			}		
		}
		$team->number=$number;
		if($number==1){
			if(User::find($user_id1)->facad==NULL){
				$messageBag = new MessageBag;
				$messageBag->add('message','Members have not completed their profile.First all members complete their profile, then fill the team form.' );
				return Redirect::back()->with('messages', $messageBag);
			}	
			$team->completed=1;
			$team->save();
			$messageBag = new MessageBag;
			$messageBag->add('message','members added successfully' );
			return Redirect::back()->with('messages', $messageBag);										
		}
		if($number==2){
			if(User::find($user_id2)==NULL){
			$messageBag = new MessageBag;
			$messageBag->add('message','Members not found. Reload to refill the form' );
			return Redirect::back()->with('messages', $messageBag);	
			}
			$team->user_id2=Input::get('id2');
			if(User::find($user_id1)->facad==NULL||User::find($user_id2)->facad==NULL){
				$messageBag = new MessageBag;
				$messageBag->add('message','Members have not completed their profile.First all members complete their profile, then fill the team form.' );
				return Redirect::back()->with('messages', $messageBag);
			}
			User::where('id','=',Input::get('id2'))
				->update(array('itsp' => $team->id));

			$team->completed=1;
			$team->save();
			$messageBag = new MessageBag;
			$messageBag->add('message','members added successfully' );
			return Redirect::back()->with('messages', $messageBag);				
		}
		if($number==3){
			if(User::find($user_id2)==NULL||User::find($user_id3)==NULL){
			$messageBag = new MessageBag;
			$messageBag->add('message','Members not found. Reload to refill the form' );
			return Redirect::back()->with('messages', $messageBag);	
			}
			if(User::find($user_id1)->facad==NULL||User::find($user_id2)->facad==NULL||User::find($user_id3)->facad==NULL){
				$messageBag = new MessageBag;
				$messageBag->add('message','Members have not completed their profile.First all members complete their profile, then fill the team form.' );
				return Redirect::back()->with('messages', $messageBag);
			}
			User::where('id','=',Input::get('id2'))
			->update(array('itsp' => $team->id));
			User::where('id','=',Input::get('id3'))
			->update(array('itsp' => $team->id));
			$team->user_id2=Input::get('id2');
			$team->user_id3=Input::get('id3');
			$team->completed=1;
			$team->save();
			$messageBag = new MessageBag;
			$messageBag->add('message','members added successfully' );
			return Redirect::back()->with('messages', $messageBag);				
		}
		if($number==4){
			if(User::find($user_id2)==NULL||User::find($user_id3)==NULL||User::find($user_id4)==NULL){
			$messageBag = new MessageBag;
			$messageBag->add('message','Members not found. Reload to refill the form' );
			return Redirect::back()->with('messages', $messageBag);	
			}
			if(User::find($user_id1)->facad==NULL||User::find($user_id2)->facad==NULL||User::find($user_id3)->facad==NULL||User::find($user_id4)->facad==NULL){
				$messageBag = new MessageBag;
				$messageBag->add('message','Members have not completed their profile.First all members complete their profile, then fill the team form.' );
				return Redirect::back()->with('messages', $messageBag);
			}			
			User::where('id','=',Input::get('id2'))
			->update(array('itsp' => $team->id));
			User::where('id','=',Input::get('id3'))
			->update(array('itsp' => $team->id));
			User::where('id','=',Input::get('id4'))
			->update(array('itsp' => $team->id));
			$team->user_id2=Input::get('id2');
			$team->user_id3=Input::get('id3');
			$team->user_id4=Input::get('id4');
			$team->completed=1;
			$team->save();
			$messageBag = new MessageBag;
			$messageBag->add('message','members added successfully' );
			return Redirect::back()->with('messages', $messageBag);					
		}
		if($number==5){
			if(User::find($user_id2)==NULL||User::find($user_id3)==NULL||User::find($user_id4)==NULL||User::find($user_id5)==NULL){
			$messageBag = new MessageBag;
			$messageBag->add('message','Members not found. Reload to refill the form' );
			return Redirect::back()->with('messages', $messageBag);	
			}
			if(User::find($user_id1)->facad==NULL||User::find($user_id2)->facad==NULL||User::find($user_id3)->facad==NULL||User::find($user_id4)->facad==NULL){
				$messageBag = new MessageBag;
				$messageBag->add('message','Members have not completed their profile.First all members complete their profile, then fill the team form.' );
				return Redirect::back()->with('messages', $messageBag);
			}			
			User::where('id','=',Input::get('id2'))
			->update(array('itsp' => $team->id));
			User::where('id','=',Input::get('id3'))
			->update(array('itsp' => $team->id));
			User::where('id','=',Input::get('id4'))
			->update(array('itsp' => $team->id));
			User::where('id','=',Input::get('id5'))
			->update(array('itsp' => $team->id));
			$team->user_id2=Input::get('id2');
			$team->user_id3=Input::get('id3');
			$team->user_id4=Input::get('id4');
			$team->user_id5=Input::get('id5');
			$team->completed=1;
			$team->save();
			$messageBag = new MessageBag;
			$messageBag->add('message','members added successfully' );
			return Redirect::back()->with('messages', $messageBag);					
		}		

			$messageBag = new MessageBag;
			$messageBag->add('message','Some error' );
			return Redirect::back()->with('messages', $messageBag);

	}

	public function want_room(){
		if(Input::has('want_room')){
			Auth::User()->want_room=Input::get('want_room');
			Auth::User()->save();
		}
		return Redirect::back();
	}


	public function room_retained(){
		if(Input::get('room_retained')=="yes"){
			Auth::User()->room_retained=1;
			Auth::User()->save();
		}
		return Redirect::back();
	}

	public function team()
	{	
		if(!Auth::check()){
			return Redirect::back();
		}
		if(Auth::User()->itsp==0){
			View::share('user1',Auth::User());
		}
		else{
			$team=ITSP::find(Auth::User()->itsp);
			$user1=Auth::User();
			$user2=User::find($team->user_id2);
			$user3=User::find($team->user_id3);
			$user4=User::find($team->user_id4);
			$user5=User::find($team->user_id5);
			View::share('user1',$user1);
			View::share('team',$team);
			View::share('user2',$user2);
			View::share('user3',$user3);
			View::share('user4',$user4);
			View::share('user5',$user5);
		}
	
		return View::make('events.ITSP_2015.team');
	}

	public function team_verify()
	{	
		try{
			if(Input::has('team_id')){
				$team_id=Input::get('team_id');
				$team=ITSP::find($team_id);
				if($team!=NULL){
					if($team->user_id==Auth::User()->id){
						if($team->status=="Selected"){
							Auth::User()->itsp=$team_id;
							Auth::User()->save();
							$messageBag = new MessageBag;
							$messageBag->add('message','Team Added successfully' );
							return Redirect::back()->with('messages', $messageBag);
						}	
						$messageBag = new MessageBag;
						$messageBag->add('message',"Team not selected for Project. Reload to refill the form" );
						return Redirect::back()->with('messages', $messageBag);
					}
					$messageBag = new MessageBag;
					$messageBag->add('message',"Fill details with the user who submitted the abstract. Reload to refill the form" );
					return Redirect::back()->with('messages', $messageBag);					
				}
			}
		}
		catch(Exception $e) {
				$messageBag = new MessageBag;
				$messageBag->add('message','Some error found' );
				return Redirect::back()->with('messages', $messageBag);
		}

				$messageBag = new MessageBag;
				$messageBag->add('message',"Team Not found" );
				return Redirect::back()->with('messages', $messageBag);

	}

	public function give_reviews()
	{
		return View::make('events.ITSP_2015.give_reviews');
	}

	public function excel_maker(){
		$users=ITSP::where('status','=','Selected')->get();
		var_dump($users);
	}
	public function update_slots()
	{
		$file = fopen(public_path()."/media/ITSP2015/qwrerttfaytfdyagadsaghgadugye2363613b/Final Slot allotment - Slot 1.csv","r");
		while(! feof($file))
		  {
		  $csv=fgetcsv($file);
		  $team=ITSP::find($csv[1]);
		  try{
			  $team->alloted_slot=$csv[4];
			  $team->status="Selected";
			  $team->save();
			}
			catch(Exception $e){
				print( $csv[1]." ".$csv[4]);
			}
		  }
		  fclose($file);	
		$file = fopen(public_path()."/media/ITSP2015/qwrerttfaytfdyagadsaghgadugye2363613b/Final Slot allotment - Slot 2.csv","r");
			while(! feof($file))
		  {
		  $csv=fgetcsv($file);
		  $team=ITSP::find($csv[1]);
		  try{
			  $team->alloted_slot=$csv[4];
			  $team->status="Selected";
			  $team->save();
			}
			catch(Exception $e){
				print( $csv[1]." ".$csv[4]);
			}
		  }
		fclose($file);
	}

	public function take_reviews()
	{	
		if(Input::has('team_id')){
			$team_id=Input::get('team_id');
			$review=Input::get('review');
			//$alloted_slot=Input::get('alloted_slot');
			//$status=Input::get('status');
			$user=ITSP::find($team_id);
			if($user!=NULL && $review!=""){//} && $status!="" ){
				// if($alloted_slot==""){
				// 	if($status=="Selected"){
				// 		$messageBag = new MessageBag;
				// 		$messageBag->add('message',"Details not complete. Dekh k bhara kar be :p" );
				// 		return Redirect::back()->with('messages', $messageBag);
				// 	}
				// }
				$user->reviewed=1;
				$user->reviews=$review;
				//$user->alloted_slot=$alloted_slot;
				//$user->status=$status;
				$user->save();
				$messageBag = new MessageBag;
				$messageBag->add('message',"Reviewed Successfully" );
				return Redirect::back()->with('messages', $messageBag);
			}
			else{
				$messageBag = new MessageBag;
				$messageBag->add('message',"Wrong Details." );
				return Redirect::back()->with('messages', $messageBag);
			}
		}
			return View::make('events.ITSP_2015.give_reviews');
	}

	public function final_reviews()
	{	if(Auth::check()){
			if(Input::has('team_id')){
				if(ITSP::find(Input::get('team_id'))!=NULL){
					if((ITSP::find(Input::get('team_id'))->user_id==Auth::User()->id)||(Auth::User()->admin==1)){
						if(ITSP::find(Input::get('team_id'))->reviewed==1){
							$review=ITSP::find(Input::get('team_id'))->reviews;
							View::share('review',$review);
//							View::share('user',ITSP::find(Input::get('team_id')));
							return View::make('events.ITSP_2015.final_reviews');
						}
						else
						{	
							View::share('review','You are yet to be reviewed');
							return View::make('events.ITSP_2015.final_reviews');
						}
					}
					else{
							View::share('review','Well, Login with the account who submitted this abstract. Wrong team id and user combination');
							return View::make('events.ITSP_2015.final_reviews');
					}
				}
				else{
						View::share('review','team does not exist');
						return View::make('events.ITSP_2015.final_reviews');
				}

			}
			return View::make('events.ITSP_2015.final_reviews');
		}
		else{
			View::share('error','Login to see your abstract review');
			return View::make('events.ITSP_2015.final_reviews');
		}
	}
	
	public function resubmit_abstract()
	{	if(!Auth::check()){
			return Redirect::to(URL::route('events.ITSP_2015.final_reviews'));
		}
		$id=Input::get('id');
		$abs=Input::file('abs');



		if(!Input::hasFile('abs') || $id==""){

			$messageBag = new MessageBag;
			$messageBag->add('message',"Error in form. Fill up all the required fields." );

			return Redirect::back()->with('messages', $messageBag)->withInput();
		}

		$team=ITSP::find($id);
		if($team==NULL){
			$messageBag = new MessageBag;
			$messageBag->add('message',"Team Not found." );

			return Redirect::back()->with('messages', $messageBag)->withInput();			

		}
		if($team->user_id==Auth::User()->id){
			$extension = $abs->getClientOriginalExtension();
			if($extension=="pdf"){

			$dest=public_path()."/media/ITSP2015/qwrerttfaytfdyagadsaghgadugye2363613b/abstract/".$team->club;
			$fileName=$team->team_name."_".$team->project_name."_".$team->id.".pdf";
			$destName=$dest."/".$fileName;
			$abs->move($dest, $fileName);
			$messageBag = new MessageBag;
			$messageBag->add('message',"Abstract changed" );

			return Redirect::back()->with('messages', $messageBag)->withInput();
			}
			else{
			$messageBag = new MessageBag;
			$messageBag->add('message',"Submit abstract in pdf format" );

			return Redirect::back()->with('messages', $messageBag)->withInput();
			}			
		}
		else{
			$messageBag = new MessageBag;
			$messageBag->add('message',"Login with the user who submitted the abstract earlier." );

			return Redirect::back()->with('messages', $messageBag)->withInput();			

		}
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

	public function discuss()
	{
		return View::make('events.ITSP_2015.discuss');
	}

	public function review($club)
	{	if(Auth::check()){
			if(Auth::User()->mentor==1 || Auth::User()->admin==1){
				$users="yo";
				if($club=="mnp"){
					global $users;
					$users=ITSP::where('club','LIKE','%Maths%')->get();

				}
				else if($club=="krittika"){
					global $users;
					$users=ITSP::where('club','LIKE','%ttika%')->get();

				}
				else if($club=="wncc"){
					global $users;
					$users=ITSP::where('club','LIKE','%WnCC%')->get();


				}
				else if($club=="robotics"){
					global $users;
					$users=ITSP::where('club','LIKE','%Robo%')->get();

				}
				else if($club=="electronics"){
					global $users;
					$users=ITSP::where('club','LIKE','%tronics%')->get();

				}
				else if($club=="techgsr"){
					global $users;
					$users=ITSP::where('club','LIKE','%GSR%')->get();

				}
				else if($club=="technovation"){
					global $users;
					$users=ITSP::where('club','LIKE','%vation%')->get();

				}
				else if($club=="aero"){
					global $users;
					$users=ITSP::where('club','LIKE','%model%')->get();
				}
				else if($club=="all"){
					global $users;
					$users=ITSP::get();
				}
				else {
					$clubs =array('all','wncc', 'krittika', 'electronics', 'techgsr', 'robotics', 'aero', 'mnp', 'technovation');
					return View::make('events.ITSP_2015.review_error',compact('clubs'));		
				}			
					//var_dump($users);
					if( sizeof($users)==0){
						return;
					};
					$users=$users->toArray();
					$attr = array('class'=>'table', 'id'=>'myTbl');
					$t = new Table($users, $attr);
					$data= $t->build();
					return View::make('events.ITSP_2015.review',compact('data'));
			}
			return "You dont have required access.";	
		}
		return '<a href="'.UserController::LoginURL().'">Login</a>. to continue';
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

		if(!Input::hasFile("abstract") || $team_name=="" || $project_name=="" || $club=="" ||$slot==""||$t1_name==""||$t1_roll=="" || $t1_contact=="" ||$t1_hostel=="" || $t1_dept=="" ||$t1_email==""){

			$messageBag = new MessageBag;
			$messageBag->add('message',"Error in form. Fill up all the required fields." );
			//echo $team_name." ".$project_name." ".$club." ".$slot." ".$t1_name." ".$t1_roll." ".$t1_contact." ".$t1_hostel." ".$t1_dept."\n";

			return Redirect::back()->with('messages', $messageBag)->withInput();
		}


		if($id==""){
			$extension = $abstract->getClientOriginalExtension();
			if($extension=="pdf"){
				$newTeam=new ITSP;
				$newTeam->saveFromInput(Input::all());
				$newTeam->user_id=Auth::User()->id;
				$newTeam->save();				
				//$user=new ITSPUser;
				$webpath="http://stab-iitb.org/media/ITSP2015/qwrerttfaytfdyagadsaghgadugye2363613b/abstract/".$club;
				$dest=public_path()."/media/ITSP2015/qwrerttfaytfdyagadsaghgadugye2363613b/abstract/".$club;
				$fileName=$team_name."_".$project_name."_".$newTeam->id.".pdf";
				$destName=$dest."/".$fileName;
				$newTeam->abstract=$webpath.'/'.$fileName;

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
						$team->save();				

						$dest=public_path()."/media/ITSP2015/qwrerttfaytfdyagadsaghgadugye2363613b/abstract/".$club;
						$fileName=$team_name."_".$project_name."_".$team->id.".pdf";
						$destName=$dest."/".$fileName;			
						$webpath="http://stab-iitb.org/media/ITSP2015/qwrerttfaytfdyagadsaghgadugye2363613b/abstract/".$club;

						$team->abstract=$webpath.'/'.$fileName;
						$team->user_id=Auth::User()->id;

						$team->save();
						if(!file_exists($dest)){
							mkdir($dest,0777,true);
						}
						$destinationPath=public_path()."/media/ITSP2015/qwrerttfaytfdyagadsaghgadugye2363613b/abstract/".$club."/";
						$abstract->move($destinationPath, $fileName);
						$messageBag = new MessageBag;
						$messageBag->add('message',"Abstract successfully submitted. Your Team id is ".$team->id.". Remember this for future reference. If you need to change your abstract, refill the entire form with same team name, team id and roll number" );
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

public function final_teams(){

		echo "<!DOCTYPE html>

<html>
<head>
<style>
table, td {
    font-size: 1em;
    border: 1px solid #98bf21;
    padding: 3px 7px 2px 7px;
}
th {
    font-size: 1.1em;
    text-align: left;
    padding-top: 5px;
    padding-bottom: 4px;
    background-color: #A7C942;
    color: #ffffff;
}

</style>
</head>
<body>";

		echo "Those who completely registered their team and added all the members.<br>'Yes' / 'No' means that you want room retention or not. It has nothing to do with ITSP registration or team registration.";


		$users=ITSP::where('completed','=','1')->get()->toArray();
		echo "<table >";
		foreach($users as $team){
			$user1=$team['user_id'];
			$user2=$team['user_id2'];
			$user3=$team['user_id3'];
			$user4=$team['user_id4'];
			$user5=$team['user_id5'];
			$user1=User::find($user1);
			$user2=User::find($user2);
			$user3=User::find($user3);
			$user4=User::find($user4);
			$user5=User::find($user5);

			echo "<tr><th>".$team['id'].'</th><td>';
			if($user1!=NULL ){
				if($user1->want_room!="No")
				echo $user1->name.'</td><td>'.$user1->roll_no.'</td><td>'.$user1->want_room.'</td><td>';
			}
			if($user2!=NULL){
				if($user2->want_room!="No")
				echo $user2->name.'</td><td>'.$user2->roll_no.'</td><td>'.$user2->want_room.'</td><td>';
			}
			if($user3!=NULL){
				if($user3->want_room!="No")
				echo $user3->name.'</td><td>'.$user3->roll_no.'</td><td>'.$user3->want_room.'</td><td>';
			}
			if($user4!=NULL){
				if($user4->want_room!="No")
				echo $user4->name.'</td><td>'.$user4->roll_no.'</td><td>'.$user4->want_room.'</td><td>';
			}
			if($user5!=NULL){
				if($user5->want_room!="No")
				echo $user5->name.'</td><td>'.$user5->roll_no.'</td>'.$user5->want_room.'</td><td>';
			}
			echo "</tr>";
		}

		echo "</table>";
				echo "</body>
</html>
";



}
	public function test(){
		echo "<!DOCTYPE html>
}
<html>
<head>
<style>
table, td {
    font-size: 1em;
    border: 1px solid #98bf21;
    padding: 3px 7px 2px 7px;
}
th {
    font-size: 1.1em;
    text-align: left;
    padding-top: 5px;
    padding-bottom: 4px;
    background-color: #A7C942;
    color: #ffffff;
}

</style>
</head>
<body>";

		echo "Those who completely registered their team and added all the members.<br>'Yes' / 'No' means that you want room retention or not. It has nothing to do with ITSP registration or team registration.";


		$users=ITSP::where('completed','=','1')->get()->toArray();
		echo "<table >";
		foreach($users as $team){
			$user1=$team['user_id'];
			$user2=$team['user_id2'];
			$user3=$team['user_id3'];
			$user4=$team['user_id4'];
			$user5=$team['user_id5'];
			$user1=User::find($user1);
			$user2=User::find($user2);
			$user3=User::find($user3);
			$user4=User::find($user4);
			$user5=User::find($user5);

			echo "<tr><th>".$team['id'].'</th><td>';
			if($user1!=NULL){
				echo $user1->name.'</td><td>'.$user1->roll_no.'</td><td>'.$user1->want_room.'</td><td>';
			}
			if($user2!=NULL){
				echo $user2->name.'</td><td>'.$user2->roll_no.'</td><td>'.$user2->want_room.'</td><td>';
			}
			if($user3!=NULL){
				echo $user3->name.'</td><td>'.$user3->roll_no.'</td><td>'.$user3->want_room.'</td><td>';
			}
			if($user4!=NULL){
				echo $user4->name.'</td><td>'.$user4->roll_no.'</td><td>'.$user4->want_room.'</td><td>';
			}
			if($user5!=NULL){
				echo $user5->name.'</td><td>'.$user5->roll_no.'</td>'.$user5->want_room.'</td><td>';
			}
			echo "</tr>";
		}

		echo "</table>";


		echo "<br><br><br>Those teams which are selected for ITSP projects.<br>";
		echo "<table >";
		$users=ITSP::where('status','=','Selected')->get()->toArray();

		foreach($users as $team){
			$user1=$team['user_id'];
			$user2=$team['user_id2'];
			$user3=$team['user_id3'];
			$user4=$team['user_id4'];
			$user5=$team['user_id5'];
			$user1=User::find($user1);
			$user2=User::find($user2);
			$user3=User::find($user3);
			$user4=User::find($user4);
			$user5=User::find($user5);

			echo "<tr><th>".$team['id'].'</th><td>';
			if($user1!=NULL){
				echo $user1->name.'</td><td>'.$user1->roll_no.'</td><td>';
			}
			if($user2!=NULL){
				echo $user2->name.'</td><td>'.$user2->roll_no.'</td><td>';
			}
			if($user3!=NULL){
				echo $user3->name.'</td><td>'.$user3->roll_no.'</td><td>';
			}
			if($user4!=NULL){
				echo $user4->name.'</td><td>'.$user4->roll_no.'</td><td>';
			}
			if($user5!=NULL){
				echo $user5->name.'</td><td>'.$user5->roll_no.'</td>';
			}
			echo "</tr>";
		}
		echo "</table>";

		echo "</table>";
		echo "</body>
</html>
";		
		// echo "<br><br><br>Those who completed their team";
		// $users=ITSP::where('completed','=','1')->get()->toArray();
		// foreach($users as $team){
		// 	$user1=$team['user_id'];
		// 	$user2=$team['user_id2'];
		// 	$user3=$team['user_id3'];
		// 	$user4=$team['user_id4'];
		// 	$user5=$team['user_id5'];
		// 	$user1=User::find($user1);
		// 	$user2=User::find($user2);
		// 	$user3=User::find($user3);
		// 	$user4=User::find($user4);
		// 	$user5=User::find($user5);

		// 	echo $team['id'].', ';
		// 	if($user1!=NULL){
		// 		echo $user1->name.', '.$user1->roll_no.', ';
		// 	}
		// 	if($user2!=NULL){
		// 		echo $user2->name.', '.$user2->roll_no.', ';
		// 	}
		// 	if($user3!=NULL){
		// 		echo $user3->name.', '.$user3->roll_no.', ';
		// 	}
		// 	if($user4!=NULL){
		// 		echo $user4->name.', '.$user4->roll_no.', ';
		// 	}
		// 	if($user5!=NULL){
		// 		echo $user5->name.', '.$user5->roll_no.', ';
		// 	}
		// 	echo "<br>\n";
		// }


	}

	public function edit_team(){
		$user=ITSP::find((Auth::User()->itsp));
		$user->completed=NULL;
		$user->user_id2=NULL;
		$user->user_id3=NULL;
		$user->user_id4=NULL;
		$user->user_id5=NULL;
		$user->save();
		return Redirect::back();
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
