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
//    public function auth2()
//    {
//        {
//            $club = Input::get('club');
//            $hostel_no = Input::get('Hostel');
////            return $hostel_no;
//            $doc_link = Input::get('doc_link');
//            if ($doc_link == "" || count($hostel_no) == 0 || $club == "") {
//                $messageBag = new MessageBag;
//                $messageBag->add('message', "Error in form. Fill up all the required fields.");
//                return Redirect::back()->with('messages', $messageBag)->withInput();
//            }
//            else
//            {
//                $newTeam = new Hostel_tech_events();
//                $newTeam->saveFromInput(Input::all());
//                $newTeam->save();
//                $messageBag = new MessageBag;
//                $messageBag->add('message', "Abstract successfully submitted. Your Team id is " . $newTeam->owe . ". Remember this for future reference. If you need to change your abstract, refill the entire form with same team name, team id and roll number");
//                return Redirect::back()->with('messages', $messageBag)->withInput();
//            }
//        }
//
//    }

    public function reviews()
    {
        $events = Hostel_tech_events::all();
//        return $events;
        return View::make('events.Hostel_Events.reviews',compact('events'));
    }

    public function review($id)
    {
        $event = Hostel_tech_events::find($id);
        $event_name = $event->event_name;
        $user = $event->user;
        $hostels = $event->hostel_no;
        $club = $event->club;
        $doc_link = $event->documentation_link;
        $youtube_link = $event->youtubelink;
        $data = [$id, $event_name, $user, $hostels, $club, $doc_link, $youtube_link];
        return View::make('events.Hostel_Events.review',compact('data'));
    }

    public function rev_form($id)
    {
        if(Auth::check())
        {
            if(Auth::User()->admin==1)
            {
                $event = Hostel_tech_events::find($id);
                $status_form = Input::get('status');
                $result_form = Input::get('review');

                $event->status = $status_form;
                $event->reviews = $result_form;
                $event->save();

                $messageBag = new MessageBag;
                $messageBag->add('message', "Review and Status submitted successfully");
                return Redirect::back()->with('messages', $messageBag)->withInput();
            }
        }
        $messageBag = new MessageBag;
        $messageBag->add('message', "Only an Admin can review");
        return Redirect::back()->with('messages', $messageBag)->withInput();

    }
}
