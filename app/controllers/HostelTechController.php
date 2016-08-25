<?php
use Illuminate\Support\MessageBag;


class HostelTechController extends \BaseController
{
    public function home()
    {
        return View::make('events.Hostel_Events.home');
    }

    public function techform()
    {
        return View::make('events.Hostel_Events.tech_events');
    }

    public function auth()
    {

        $club = Input::get('club');
        $hostel_no = Input::get('Hostel');
        $doc_link = Input::get('doc_link');

        if ($doc_link == "" || $club == "" || $hostel_no[0] == "")
        {

            $messageBag = new MessageBag;
            $messageBag->add('message', "Missing Fields");
            return Redirect::back()->with('messages', $messageBag)->withInput();
        }
        else
        {

            $new_event = new Hostel_tech_events();
            $new_event->saveFromInput(Input::all());

            $new_event->save();
            $messageBag = new MessageBag;
            $messageBag->add('message', "Event Documentation submitted successfully");
            return Redirect::back()->with('messages', $messageBag)->withInput();
        }
    }
    public function auth2()
    {
        {
            $club = Input::get('club');
            $hostel_no = Input::get('Hostel');
//            return $hostel_no;
            $doc_link = Input::get('doc_link');
            if ($doc_link == "" || count($hostel_no) == 0 || $club == "") {
                $messageBag = new MessageBag;
                $messageBag->add('message', "Error in form. Fill up all the required fields.");
                return Redirect::back()->with('messages', $messageBag)->withInput();
            }
            else
            {
                $newTeam = new Hostel_tech_events();
                $newTeam->saveFromInput(Input::all());
                $newTeam->save();
                $messageBag = new MessageBag;
                $messageBag->add('message', "Abstract successfully submitted. Your Team id is " . $newTeam->owe . ". Remember this for future reference. If you need to change your abstract, refill the entire form with same team name, team id and roll number");
                return Redirect::back()->with('messages', $messageBag)->withInput();
            }
        }

    }
}
