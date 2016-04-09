<?php
use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class ITSP_Projects extends Eloquent implements UserInterface , RemindableInterface{

	use UserTrait , RemindableTrait;

	protected $table = 'ITSP_Projects';

	public function saveFromInput()
	{
		$this->team_name = Input::get('team_name');
		$this->project_name = Input::get('project_name');
		$this->club = Input::get('club');
		$this->user1 = Input::get('t1_stabid');
        $this->user1_name = User::find($this->user1)->name;
		if (Input::get('t2_stabid') != null)
		{$this->user2 = Input::get('t2_stabid');}
		if (Input::get('t3_stabid') != null)
		{$this->user3 = Input::get('t3_stabid');}
		if (Input::get('t4_stabid') != null)
		{$this->user4 = Input::get('t4_stabid');}
        $this->abstractlink = Input::get('abs_link');

	}

}
