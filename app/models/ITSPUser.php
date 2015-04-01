<?php

class ITSPUser extends Eloquent{
	protected $table = 'ITSP_2015_users';


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
		$this->ug_pg = Input::get('ug_pg');
		
		
		
	}

	public function saveSignUp(){

		$this->teamId = Input::get('teamId');
		$this->passwd = Input::get('passwd');
	}
}
