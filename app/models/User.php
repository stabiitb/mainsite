<?php
use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface , RemindableInterface{

	use UserTrait , RemindableTrait;

	protected $table = 'Users';


	public function saveFromInput(){

		$this->name = Input::get('name');
		$this->roll_no = Input::get('roll_no');
		$this->department = Input::get('dept');
		$this->contact = Input::get('contact');
		$this->facad = Input::get('facad');
		$this->facad_ldap = Input::get('facad_ldap');
		$this->hostel = Input::get('hostel');
		$this->room = Input::get('room');
	}

/*

	public function saveFromInput($inp,$url){

		$this->member1_name = $inp['name'];
		$this->member1_roll = $inp['roll'];
		$this->member1_emailId = $inp['emailId'];
		$this->club = $inp['club'];
		$this->passwd = $inp['passwd'];
		$this->team = $inp['team'];
		$this->url = $url;
		$this->member1_phone = $inp['phone'];
		$this->slot = $inp['slot'];
		// $this->team_detail = $inp'team-detail');
		// $this->sop = $inp'sop');
		// $this->ug_pg = $inp'ug_pg');
		
		
		
	}

	public function saveSignUp($inp){

		$this->teamId = $inp['teamId'];
		$this->passwd = $inp['passwd'];
	}*/
}
