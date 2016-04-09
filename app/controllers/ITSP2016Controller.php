<?php
use Illuminate\Support\MessageBag;


class ITSP2016Controller extends \BaseController
{

	public function auth()
	{
        $curr_user_id = Auth::User()->id;
        $id = Input::get("id");
        if($id != null)
        {
            $team_existing = ITSP_Projects::find($id);

            if (is_null($team_existing))
            {
                $messageBag = new MessageBag;
                $messageBag->add('message',"Team id does not exist" );
                return Redirect::back()->with('messages', $messageBag)->withInput();
            }

            else
            {

                if ($curr_user_id == $team_existing -> user1)
                {
                    $team_existing->saveFromInput(Input::all());
                    $team_existing->save();
                    $messageBag = new MessageBag;
                    $messageBag->add('message',"All changes saved successfully" );
                    return Redirect::back()->with('messages', $messageBag)->withInput();
                }
            }
        }
		else
        {
            $team_name = Input::get("team_name");
            $project_name = Input::get("project_name");
            $club = Input::get("club");
            $t1_id = Input::get('t1_stabid');
            $abstract = Input::get('abs_link');

            if ($abstract == "" || $team_name == "" || $project_name == "" || $club == "" || $t1_id == "") {
                $messageBag = new MessageBag;
                $messageBag->add('message', "Error in form. Fill up all the required fields.");
                return Redirect::back()->with('messages', $messageBag)->withInput();
            }
            else
            {
                $newTeam = new ITSP_Projects;
                $newTeam->saveFromInput(Input::all());
                if ($curr_user_id == $newTeam->user1)
                {
                    $newTeam->save();
                    $messageBag = new MessageBag;
                    $messageBag->add('message', "Abstract successfully submitted. Your Team id is " . $newTeam->id . ". Remember this for future reference. If you need to change your abstract, refill the entire form with same team name, team id and roll number");
                    return Redirect::back()->with('messages', $messageBag)->withInput();
                }
                else
                {
                    $messageBag = new MessageBag;
                    $messageBag->add('message', "Only the team leader can submit this form");
                    return Redirect::back()->with('messages', $messageBag)->withInput();
                }
            }
        }

	}
    public function review($club)
    {	if(Auth::check()){
        if(Auth::User()->mentor==1 || Auth::User()->admin==1){
            $users="yo";
            if($club=="mnp"){
                global $users;
                $users=ITSP_Projects::where('club','LIKE','%Maths%')->get();

            }
            else if($club=="krittika"){
                global $users;
                $users=ITSP_Projects::where('club','LIKE','%ttika%')->get();

            }
            else if($club=="wncc"){
                global $users;
                $users=ITSP_Projects::where('club','LIKE','%WnCC%')->get();
            }
            else if($club=="robotics"){
                global $users;
                $users=ITSP_Projects::where('club','LIKE','%Robo%')->get();
            }
            else if($club=="electronics") {
                global $users;
                $users = ITSP_Projects::where('club', 'LIKE', '%tronics%')->get();
            }
            else if($club=="aero"){
                global $users;
                $users=ITSP_Projects::where('club','LIKE','%model%')->get();
            }
            else if($club=="bio"){
                global $users;
                $users=ITSP_Projects::where('club','LIKE','%bio%')->get();
            }
            else if($club=="energy"){
                global $users;
                $users=ITSP_Projects::where('club','LIKE','%ene%')->get();
            }
            else if($club=="all"){
                global $users;
                $users=ITSP_Projects::get();
            }
            else {
                $clubs =array('all','wncc', 'krittika', 'electronics', 'robotics', 'aero', 'mnp', 'bio', 'energy');
                return View::make('events.ITSP_2016.review_error',compact('clubs'));
            }
            //var_dump($users);
            if( sizeof($users)==0){
                return;
            };
            $users=$users->toArray();
            $attr = array('class'=>'table table-condensed table-hover table-striped table-bordered table-responsive', 'id'=>'myTbl');
            $t = new Table($users, $attr);
            $data= $t->build();
            return View::make('events.ITSP_2016.review',compact('data'));
        }
        return "You dont have required access.";
    }
        return '<a href="'.UserController::LoginURL().'">Login</a>. to continue';
    }
    public function reviews()
    {
        return $this->review('all');
    }

}
