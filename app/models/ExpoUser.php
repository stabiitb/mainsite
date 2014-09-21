<?php

class ExpoUser extends Eloquent{
	protected $table = 'techexpo_users';


	public function saveFromInput(){

		$this->team_id = Input::get('team_id');
		$this->team_name = Input::get('team_name');
		$this->desc = Input::get('desc');
		$this->slot= Input::get('slot');
		$this->no_of_member= Input::get('no_of_member');
		$this->name = Input::get('name');
		$this->email = Input::get('email');
		$this->phone = Input::get('phone');
		$this->comment = Input::get('comment');
		
	}
}
