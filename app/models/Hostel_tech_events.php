<?php
/**
 * Created by PhpStorm.
 * User: arktheshadow
 * Date: 7/8/16
 * Time: 1:03 AM
 */
use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;
use Illuminate\Database\Eloquent\Model;

class Hostel_tech_events extends Model implements UserInterface , RemindableInterface{

    use UserTrait , RemindableTrait;

    protected $table = 'Hostel_tech_events';

    public function saveFromInput()
    {
        $this->user = Input::get('user_name');
        $this->event_name = Input::get('event_name');
        $this->date_of_event = Input::get('date');
        $this->hostel_no = join("; ",Input::get('Hostel'));
        $this->club = Input::get('club');
        $this->youtubelink = Input::get('youtube_video');
        $this->documentation_link = Input::get('doc_link');
    }
}
