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
            	if($count==3 or $count==7)$row .= '<td><a href="' . $value . '">'.$value.'</a></td>';
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
	public function feedback(){

		if(!Auth::check()){
			$messageBag = new MessageBag;
			$messageBag->add('message','Please Login First' );
			return Redirect::back()->with('messages', $messageBag);	
		}

		$team=ITSP::find(Auth::User()->itsp);
		
		
		if($team==NULL){

			$messageBag = new MessageBag;
			$messageBag->add('message','Team Not Found' );

			return Redirect::back()->with('messages', $messageBag);
		}
		$mentor1 = Input::get('m1');
		$mentor2 = Input::get('m2');
		$mentor_feedback = Input::get('mentor_feedback');

		// $mentor1=clean($mentor1);
		// $mentor2=clean($mentor2);
		// $feedback1=clean($feedback1);
		// $feedback2=clean($feedback2);

		$team->mentor1 = $mentor1;
		$team->mentor2 = $mentor2;
		$team->mentor_feedback = $mentor_feedback;
		$team->save();

		$messageBag = new MessageBag;
		$messageBag->add('message','Submitted Feedback Successfully' );
		return Redirect::back()->with('messages', $messageBag);	
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

	public function documentation(){
		return View::make('events.ITSP_2015.documentation');
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
			$user1=User::find($team->user_id);
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
	public function index2016()
	{
		return View::make('events.ITSP_2016.index');
	}
	public function faq()
	{
		return View::make('events.ITSP_2015.faq');
	}

	public function mentor()
	{
		return View::make('events.ITSP_2015.mentor');
	}
	public function mentor2016()
	{
		return View::make('events.ITSP_2016.mentor');
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

	public function reviews()
	{
		return $this->review('all');
	}

	public function documentation_img_upload()
	{
 		if (Auth::check()){
			if (Auth::User()->itsp!=NULL){

			}
			else{
				return "Invalid Access";
			}
		}
		else{
			return "Invalid Access";
		}

		if (Input::get("by")!=ITSP::find(Auth::User()->itsp)->user_id){
			return "Error";
		}
		$uploaddir = public_path().'/assets/itsp_assets/data/'.Input::get("by").'/';
		$uploadfile = $uploaddir . basename("t".$_GET['no'].".png");
		if (move_uploaded_file($_FILES['img']['tmp_name'], $uploadfile)) {
			return "done";
		} else {
   	 		echo "Possible file upload attack!\n";
		}

	}

public function documentation_projectimg_upload()
	{
 		if (Auth::check()){
			if (Auth::User()->itsp!=NULL){

			}
			else{
				return "Invalid Access";
			}
		}
		else{
			return "Invalid Access";
		}

		if (Input::get("uploadedby")!=ITSP::find(Auth::User()->itsp)->user_id){
			return "Error";
		}

function clean($string) {
   $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.
   return preg_replace('/[^A-Za-z0-9\-.]/', '', $string); // Removes special chars.
}
	
$uploaddir = public_path().'/assets/itsp_assets/data/'.$_GET['uploadedby'].'/images/';
if( is_dir($uploaddir) === false )
{
    mkdir($uploaddir);
}
$uploadfile = $uploaddir . basename(clean($_FILES['img']['name']));
if(( ($_FILES["img"]["type"] != "image/gif")
&&   ($_FILES["img"]["type"] != "image/jpeg")
&& ($_FILES["img"]["type"] != "image/jpg")
&& ($_FILES["img"]["type"] != "image/pjpeg")
&& ($_FILES["img"]["type"] != "image/x-png")
&& ($_FILES["img"]["type"] != "image/png"))
|| ($_FILES["img"]["size"] > 3*1024*1024)
)
{
	return  "File not an image of less than 3MB";
}
else if (move_uploaded_file($_FILES['img']['tmp_name'],$uploadfile )) {
    echo "done";
} else {
    	return  "File not an image of less than 3MB";

}

$txt='<div class="project-details" style="margin-top:-10%">
									<h5 class="white-text red-border-bottom" >
									'.$_GET['heading'].'</h5>
									<div class="details white-text">
										'.$_GET['detail'].'
									</div>
								</div>';


$uploaddir = public_path().'/assets/itsp_assets/data/'.$_GET['uploadedby'].'/imgalt/';
$path= $uploaddir.basename(clean($_FILES['img']['name'])).".txt";

if( is_dir($uploaddir) == false )
{	
    mkdir($uploaddir);
}
$file = fopen($path, "w");
            fwrite($file,$txt);
            fclose($file);

	}

	public function documentation_savezip()
	{
		if (Auth::check()){
			if (Auth::User()->itsp!=NULL){

			}
			else{
				return "Invalid Access";
			}
		}
		else{
			return "Invalid Access";
		}

		if (Input::get("by")!=ITSP::find(Auth::User()->itsp)->user_id){
			return "Error";
		}


		$bills=Input::file("bills");
		$newTeam=ITSP::find(Auth::User()->itsp);
		if(!Input::hasFile("bills")){

			$messageBag = new MessageBag;
			$messageBag->add('message',"Bills not attached" );

			return Redirect::back()->with('messages', $messageBag)->withInput();
		}


			$extension = $bills->getClientOriginalExtension();
			if($extension=="zip"){
				$webpath="http://stab-iitb.org/assets/itsp_assets/data/".Input::get("by");
				$dest=public_path()."/assets/itsp_assets/data/".Input::get("by");
				$fileName=strval((intval(Auth::User()->itsp)*100)%57).".zip";
				$destName=$dest."/".$fileName;
				$newTeam->project_desc=$webpath.'/'.$fileName;

				$newTeam->save();


				if(!file_exists($dest)){
					mkdir($dest,0777,true);
				}
				$destinationPath=$dest."/";
				$bills->move($destinationPath, $fileName);
				$messageBag = new MessageBag;
				$messageBag->add('message',"Bills successfully submitted." );
				return Redirect::back()->with('messages', $messageBag)->withInput();
			}
				$messageBag = new MessageBag;
				$messageBag->add('message',"Submission failed. Submit bills in zip format." );
				return Redirect::back()->with('messages', $messageBag)->withInput();
	}

	public function documentation_savefile()
	{

		if(isset($_GET['by']))
    	{

        	$by=$_GET['by'];
    	}
    else
    {
        die("error");
    }
	if (Input::get("by")!=ITSP::find(Auth::User()->itsp)->user_id){
		return "Error";
	}
	$path_chk=public_path()."/assets/itsp_assets/data/".$by."/";
$file="";
if(file_exists($path_chk."intro.txt")){

}
if(isset($_POST['intro'])){
  $file = fopen($path_chk."intro.txt", "w");
         		fwrite($file,$_POST['intro']);
         		fclose($file);
}
if(isset($_POST['motivation'])){
  $file = fopen($path_chk."motivation.txt", "w");
            fwrite($file,$_POST['motivation']);
            fclose($file);
}
if(isset($_POST['referencetext'])){
  $file = fopen($path_chk."referencetext.txt", "w");
            fwrite($file,$_POST['referencetext']);
            fclose($file);
}
if(isset($_POST['projectdesc'])){
  $file = fopen($path_chk."projectdesc.txt", "w");
            fwrite($file,$_POST['projectdesc']);
            fclose($file);
}
if(isset($_POST['idea'])){
  $file = fopen($path_chk."idea.txt", "w");
            fwrite($file,$_POST['idea']);
            fclose($file);
}
if(isset($_POST['planofaction'])){
  $file = fopen($path_chk."planofaction.txt", "w");
            fwrite($file,$_POST['planofaction']);
            fclose($file);
}
if(isset($_POST['theoryinvolved'])){
  $file = fopen($path_chk."theoryinvolved.txt", "w");
            fwrite($file,$_POST['theoryinvolved']);
            fclose($file);
}
if(isset($_POST['projectdetailstext'])){
  $file = fopen($path_chk."projectdetailstext.txt", "w");
            fwrite($file,$_POST['projectdetailstext']);
            fclose($file);
}
if(isset($_POST['componentlist'])){
  $file = fopen($path_chk."componentlist.txt", "w");
            fwrite($file,$_POST['componentlist']);
            fclose($file);
}
echo $file;
	}

	public function projects(){
		
		$mnp=ITSP::where('club','LIKE','%Maths%')->where('status','=','Selected')->get();
		// $krittika=ITSP::where('club','LIKE','%ttika%')->where('status','=','Selected')->where('slot','=','1')->get();
		$wncc=ITSP::where('club','LIKE','%WnCC%')->where('status','=','Selected')->get();
		$robo=ITSP::where('club','LIKE','%Robo%')->where('status','=','Selected')->get();
		$elec=ITSP::where('club','LIKE','%tronics%')->where('status','=','Selected')->get();
		$gsr=ITSP::where('club','LIKE','%GSR%')->where('status','=','Selected')->get();
		$techno=ITSP::where('club','LIKE','%vation%')->where('status','=','Selected')->get();
		$aero=ITSP::where('club','LIKE','%model%')->where('status','=','Selected')->get();
		$all=ITSP::where('status','=','Selected')->get();

		// $mnp=$mnp->toArray();
		// $krittika=$krittika->toArray();
		// $wncc=$wncc->toArray();
		// $robo=$robo->toArray();
		// $elec=$elec->toArray();
		// $gsr=$gsr->toArray();
		// $techno=$techno->toArray();
		// $aero=$aero->toArray();
		// $all=$all->toArray();

		$clubs=[$aero,$elec,$gsr,$mnp,$robo,$techno,$wncc,$all];

	//	return View::make('events.ITSP_2015.projects',compact('all','clubs','aero','elec','gsr','krittika','mnp','robo','techno','wncc'));
		return View::make('events.ITSP_2015.projects',compact('clubs'));
	
	}

	public function review($club)
	{	if(Auth::check()){
			if(Auth::User()->mentor==1 || Auth::User()->admin==1 || true){
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
					$attr = array('class'=>'table table-condensed table-hover table-striped table-bordered table-responsive', 'id'=>'myTbl');
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


		echo "Those who want room retention.<br>";


		$users=ITSP::where('completed','=','1')->get()->toArray();
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

			if($user1!=NULL ){
				if($user1->want_room!="No")
				echo $user1->name.', '.$user1->roll_no.', '.$user1->hostel.', '.$team['alloted_slot'].', '.$user1->department.', '.$user1->facad.', '.$user1->facad_ldap.', <br>';
		}
			if($user2!=NULL){
				if($user2->want_room!="No")
				echo $user2->name.', '.$user2->roll_no.', '.$user1->hostel.', '.$team['alloted_slot'].', '.$user2->department.', '.$user2->facad.', '.$user2->facad_ldap.', <br>';
			}
			if($user3!=NULL){
				if($user3->want_room!="No")
				echo $user3->name.', '.$user3->roll_no.', '.$user1->hostel.', '.$team['alloted_slot'].', '.$user3->department.', '.$user3->facad.', '.$user3->facad_ldap.', <br>';
			}
			if($user4!=NULL){
				if($user4->want_room!="No")
				echo $user4->name.', '.$user4->roll_no.', '.$user1->hostel.', '.$team['alloted_slot'].', '.$user4->department.', '.$user4->facad.', '.$user4->facad_ldap.', <br>';
			}
			if($user5!=NULL){
				if($user5->want_room!="No")
				echo $user5->name.', '.$user5->roll_no.', '.$user1->hostel.', '.$team['alloted_slot'].', '.$user5->department.', '.$user5->facad.', '.$user5->facad_ldap.', <br>';
			}
		}


}



public function selected_students(){

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

		echo "All the teams which were selected";
		echo "<table >";

$users=ITSP::where('completed','=','1')->get()->toArray();
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
				echo $user1->name.'</td><td>'.$user1->roll_no.'</td><td>'.$user1->hostel.'</td><td>';//.$user1->want_room.'</td><td>';
			}
			if($user2!=NULL){
				if($user2->want_room!="No")
				echo $user2->name.'</td><td>'.$user2->roll_no.'</td><td>'.$user1->hostel.'</td><td>';//.$user2->want_room.'</td><td>';
			}
			if($user3!=NULL){
				if($user3->want_room!="No")
				echo $user3->name.'</td><td>'.$user3->roll_no.'</td><td>'.$user1->hostel.'</td><td>';//.$user3->want_room.'</td><td>';
			}
			if($user4!=NULL){
				if($user4->want_room!="No")
				echo $user4->name.'</td><td>'.$user4->roll_no.'</td><td>'.$user1->hostel.'</td><td>';//.$user4->want_room.'</td><td>';
			}
			if($user5!=NULL){
				if($user5->want_room!="No")
				echo $user5->name.'</td><td>'.$user5->roll_no.'</td><td>'.$user1->hostel.'</td><td>';//.$user5->want_room.'</td><td>';
			}
			echo "</tr>";
		}


		$users=ITSP::where('status','=','selected')->where('completed','=',NULL)->get()->toArray();
		foreach($users as $team){
			$user1=$team['t1_name'];
			$user1r=$team['t1_roll'];
			$user1h=$team['t1_hostel'];	
			$user2=$team['t2_name'];
			$user2r=$team['t2_roll'];
			$user2h=$team['t2_hostel'];	
			$user3=$team['t3_name'];
			$user3r=$team['t3_roll'];
			$user3h=$team['t3_hostel'];	
			$user4=$team['t4_name'];
			$user4r=$team['t4_roll'];
			$user4h=$team['t4_hostel'];	
			/*$user2=$team['user_id2'];
			$user3=$team['user_id3'];
			$user4=$team['user_id4'];
			$user5=$team['user_id5'];
			/*$user1=User::find($user1);
			$user2=User::find($user2);
			$user3=User::find($user3);
			$user4=User::find($user4);
			$user5=User::find($user5);*/

			echo "<tr><th>".$team['id'].'</th><td>';
			if($user1!="" ){
				// if($user1->want_room!="No")
				echo $user1.'</td><td>'.$user1r.'</td><td>'.$user1h.'</td><td>';//.$user1->want_room.'</td><td>';
			}
			if($user2!=""){
				// if($user2->want_room!="No")
				echo $user2.'</td><td>'.$user2r.'</td><td>'.$user2h.'</td><td>';//.$user2->want_room.'</td><td>';
			}
			if($user3!=""){
				// if($user3->want_room!="No")
				echo $user3.'</td><td>'.$user3r.'</td><td>'.$user3h.'</td><td>';//.$user3->want_room.'</td><td>';
			}
			if($user4!=""){
				// if($user4->want_room!="No")
				echo $user4.'</td><td>'.$user4r.'</td><td>'.$user4h.'</td><td>';//.$user4->want_room.'</td><td>';
			}
			// if($user5!=NULL){
			// 	if($user5->want_room!="No")
			// 	echo $user5->name.'</td><td>'.$user5->roll_no.'</td><td>'.$user5->want_room.'</td><td>';
			// }
			echo "</tr>";
		}


		echo "</table>";
				echo "</body>
</html>
";}

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

	public function documentation_links(){
		$team=ITSP::find((Auth::User()->itsp));
		if (Input::get('youtubeLink1')!=""){
			$team->yotubeLink1=Input::get('youtubeLink1');
		}
		if (Input::get('youtubeLink2')!=""){
		$team->yotubeLink2=Input::get('youtubeLink2');
		}	
		if (Input::get('presentationLink')!=""){
		$team->presentationLink=Input::get('presentationLink');
		}
		if (Input::get('githubLink')!=""){
		$team->githubLink=Input::get('githubLink');
		}
		$team->save();
		return Redirect::back();
	}

	public function final_team_verification(){
		return View::make('events.ITSP_2015.final_team_verification');
	}

	public function tshirt(){
		return View::make('events.ITSP_2015.tshirt');
	}

	public function update_names(){
		
		$file = fopen(public_path()."/media/ITSP2015/final_team_details.csv","r");
		
		while(! feof($file))
		  {
		  $csv=fgetcsv($file);
		  $team=ITSP::find($csv[1]);
		  try{
			  $team->team_name=$csv[2];
			  $team->project_name=$csv[3];
			  $team->save();
			}
			catch(Exception $e){
				print( $csv[1]." ".$csv[2]." ".$csv[3]."<br>");
			}
		  }
		  fclose($file);	
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
