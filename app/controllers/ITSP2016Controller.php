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

    public function all_projects()
    {
        $aero_ids = [2, 15, 69, 91, 97, 98, 142, 156, 174, 179, 207];
        $aero = ITSP_Projects::find($aero_ids);
        $bio_ids = [68, 134];
        $bio = ITSP_Projects::find($bio_ids);
        $elec_ids = [1, 47, 50, 71, 78, 84, 88, 99, 100, 101, 108, 111, 115, 122, 127, 132, 160, 169, 173, 184, 190, 194, 209, 131, 225, 227, 133, 65, 80];
        $elec = ITSP_Projects::find($elec_ids);
        $energy_ids = [109, 113, 159, 178, 210, 222];
        $energy = ITSP_Projects::find($energy_ids);
        $krittika_ids = [167];
        $krittika = ITSP_Projects::find($krittika_ids);
        $mnp_ids = [121, 123, 185];
        $mnp = ITSP_Projects::find($mnp_ids);
        $robo_ids = [6, 8, 10, 11, 14, 46, 63, 64, 79, 81, 94, 96, 114, 125, 138, 4, 181, 186, 187, 188, 162, 193, 196, 202, 211, 217, 92, 76, 107, 89, 195, 119, 39];
        $robo = ITSP_Projects::find($robo_ids);
        $wncc_ids = [13, 16, 45, 48, 59, 65, 70, 75, 90, 104, 126, 128, 144, 158, 164, 170, 183, 214];
        $wncc = ITSP_Projects::find($wncc_ids);
        $all_ids = [1, 47, 50, 71, 78, 84, 88, 99, 100, 101, 108, 111, 115, 122, 127, 132, 160, 169, 173, 184, 190, 194, 209, 131, 225, 227, 133, 65, 80, 6, 8, 10, 11, 14, 46, 63, 64, 79, 81, 94, 96, 114, 125, 138, 4, 181, 186, 187, 188, 162, 193, 196, 202, 211, 217, 92, 76, 107, 89, 195, 119, 39, 68, 134, 13, 16, 45, 48, 59, 65, 70, 75, 90, 104, 126, 128, 144, 158, 164, 170, 183, 214, 109, 113, 159, 178, 210, 222, 121, 123, 185, 167, 2, 15, 69, 91, 97, 98, 142, 156, 174, 179, 207];
        $all = ITSP_Projects::find($all_ids);
        $clubs = [$aero, $bio, $elec, $energy, $krittika, $mnp, $robo, $wncc, $all];
//        $clubs = [$aero, $bio, $elec, $energy, $krittika];
        return View::make('events.ITSP_2016.all_projects', compact('clubs'));
    }

    public function completed_projects()
    {
        $aero = ITSP_Projects::where(['status' => 'Completed', 'club' => 'Aeromodelling Club'])->get();
        $elec = ITSP_Projects::where(['status' => 'Completed', 'club' => 'Electronics Club'])->get();
        $mnp = ITSP_Projects::where(['status' => 'Completed', 'club' => 'Maths and Physics'])->get();
        $robo = ITSP_Projects::where(['status' => 'Completed', 'club' => 'Robotics Club'])->get();
        $wncc = ITSP_Projects::where(['status' => 'Completed', 'club' => 'WnCC'])->get();
        $all = ITSP_Projects::where(['status' => 'Completed'])->get();
        $clubs = [$aero, $elec, $mnp, $robo, $wncc, $all];
        return View::make('events.ITSP_2016.completed_projects', compact('clubs'));
    }


}
