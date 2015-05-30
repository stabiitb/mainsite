<?php
use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class ITSP extends Eloquent implements UserInterface , RemindableInterface{

	use UserTrait , RemindableTrait;

	protected $table = 'ITSP';

	public function saveFromInput(){

		$this->team_name = Input::get('team_name');
		$this->project_name = Input::get('project_name');
		$this->project_desc = Input::get('project_desc');
		$this->club = Input::get('club');
		$this->slot = Input::get('slot');
		$this->t1_name = Input::get('t1_name');
		$this->t1_email = Input::get('t1_email');
		$this->t1_contact = Input::get('t1_contact');
		$this->t1_hostel = Input::get('t1_hostel');
		$this->t1_dept = Input::get('t1_dept');
		$this->t1_roll = Input::get('t1_roll');
		$this->t2_name = Input::get('t2_name');
		$this->t2_email = Input::get('t2_email');
		$this->t2_contact = Input::get('t2_contact');
		$this->t2_hostel = Input::get('t2_hostel');
		$this->t2_dept = Input::get('t2_dept');
		$this->t2_roll = Input::get('t2_roll');
		$this->t3_name = Input::get('t3_name');
		$this->t3_email = Input::get('t3_email');
		$this->t3_dept = Input::get('t3_dept');
		$this->t3_contact = Input::get('t3_contact');
		$this->t3_hostel = Input::get('t3_hostel');
		$this->t3_roll = Input::get('t3_roll');
		$this->t4_name = Input::get('t4_name');
		$this->t4_dept = Input::get('t4_dept');
		$this->t4_email = Input::get('t4_email');
		$this->t4_contact = Input::get('t4_contact');
		$this->t4_hostel = Input::get('t4_hostel');
		$this->t4_roll = Input::get('t4_roll');	

		
	}
}
