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
                $team_existing->saveFromInput(Input::all());
                if ($curr_user_id == $team_existing -> user1)
                {
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

}
