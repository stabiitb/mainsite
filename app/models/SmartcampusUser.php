<?php

class SmartcampusUser extends Eloquent{
	protected $table = 'smartcampus_users';


	public function saveFromInput(){

		$this->name = Input::get('name');
		$this->roll = Input::get('roll');
		$this->hno = Input::get('hno');
		$this->email = Input::get('email');
		$this->year = Input::get('year');
		$this->dept = Input::get('dept');
		$this->contact = Input::get('contact');
		$this->skills = Input::get('skills');
		$this->idea = Input::get('idea');
		$this->team_detail = Input::get('team-detail');
		$this->sop = Input::get('sop');
		
		
	}
}
