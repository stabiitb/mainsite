<?php

class ITSPUser extends Eloquent{
	protected $table = 'ITSP_2015_users';


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
	}
}
