<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CompleteDatabases extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{

		Schema::dropIfExists('Users');
		Schema::dropIfExists('techexpo_users');
		Schema::dropIfExists('ITSP');
		Schema::dropIfExists('smartcampus_users');
		Schema::dropIfExists('CMOS_challenge_users');
		Schema::create('Users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('email',200);
			$table->string('ldap_email',200)->nullable();
			$table->integer('ldap_verified')->default(0);
			$table->string('fbid',200);
			$table->string('Name',200);
			$table->string('Hostel',20)->nullable();
			$table->string('Room No',20)->nullable();
			// Type is ug / pg / fac / RA / non-iitb
			$table->string('type',20)->nullable();
			$table->string('contact',100)->nullable();
			$table->string('department',200)->nullable();
			$table->string('roll_no',200)->nullable();
			$table->timestamps();
			$table->rememberToken();
		});

		Schema::create('techexpo_users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('team_id', 500);
			$table->string('team_name', 500);
			$table->integer('slot');
			$table->string('desc',5000);
			$table->integer('no_of_member');
			$table->string('name', 500);
			$table->string('email',500);
			$table->string('phone',200);
			$table->longText('comment')->nullable();
			$table->timestamps();
			$table->rememberToken();
		});

		Schema::create('ITSP',function(Blueprint $table){

			$table->increments('id');
			$table->string('team_id')->nullable();
			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')->references('id')->on('Users');			
			$table->string('abstract');
			$table->string('year',50)->default("2015");
			$table->string('team_name',50);
			$table->string('project_name',50);
			$table->string('project_desc',500)->nullable();
			$table->string('club',50);
			$table->integer('slot');
			$table->string('t1_name',50);
			$table->string('t1_email',50);
			$table->string('t1_roll',50);
			$table->string('t1_contact',50);
			$table->string('t1_dept',50);
			$table->string('t1_hostel',50);
			$table->string('t2_name',50)->nullable();
			$table->string('t2_email',50)->nullable();
			$table->string('t2_roll',50)->nullable();
			$table->string('t2_dept',50)->nullable();			
			$table->string('t2_contact',50)->nullable();
			$table->string('t2_hostel',50)->nullable();
			$table->string('t3_name',50)->nullable();
			$table->string('t3_dept',50)->nullable();			
			$table->string('t3_email',50)->nullable();
			$table->string('t3_roll',50)->nullable();
			$table->string('t3_contact',50)->nullable();
			$table->string('t3_hostel',50)->nullable();
			$table->string('t4_name',50)->nullable();
			$table->string('t4_dept',50)->nullable();			
			$table->string('t4_email',50)->nullable();
			$table->string('t4_roll',50)->nullable();
			$table->string('t4_contact',50)->nullable();
			$table->string('t4_hostel',50)->nullable();
			$table->integer('reviewed')->default(0);
			$table->string('reviews',500)->nullable();
			$table->string('accepted_by',50)->nullable();
			$table->timestamps();
			$table->rememberToken();			

		});

		Schema::create('smartcampus_users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 500);
			$table->string('roll', 100);
			$table->string('hno', 500);
			$table->string('year', 500);
			$table->string('ug_pg', 50);
			$table->string('email', 500);
			$table->string('dept', 500);
			$table->string('contact', 500);
			$table->string('skills', 1000);
			$table->text('idea');
			$table->text('sop');
			$table->text('team_detail');
			$table->string('abstract_path',200);
			$table->timestamps();
			$table->rememberToken();
		});	

		Schema::create('CMOS_challenge_users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 500);
			$table->string('roll', 100);
			$table->string('semester', 500);
			$table->string('program', 50);
			$table->integer('difficulty');
			$table->text('feedback');
			$table->string('abstract_path',200);
			$table->timestamps();
			$table->rememberToken();
		});
		/*
		Schema::create('ITSP_2015_users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('team_id',30);
			$table->string('team_name',500);
			$table->string('passwd',500);
			// $table->string('passwd');
			$table->string("url");
			// $table->string('team_name', 500);
			$table->string('project_Idea', 500)->nullable;
			$table->string('slot', 100)->nullable;
			$table->string('club',100);
			//$table->string('gmailId',100);
			$table->string('member1_name', 500);
			$table->string('member1_roll', 9);
			$table->string('member1_emailId', 50);
			$table->string('member1_phone', 500);
			$table->string('member2_name', 500)->nullable;
			$table->string('member2_roll', 9)->nullable;
			$table->string('member2_emailId', 50)->nullable;
			$table->string('member2_phone', 500)->nullable;
			$table->string('member3_name', 500)->nullable;
			$table->string('member3_roll', 9)->nullable;
			$table->string('member3_emailId', 50)->nullable;
			$table->string('member3_phone', 500)->nullable;
			$table->string('member4_name', 500)->nullable;
			$table->string('member4_roll', 9)->nullable;
			$table->string('member4_emailId', 50)->nullable;
			$table->string('member4_phone', 500)->nullable;
	//		$table->string('Abstract_path',200)->nullable;
			$table->timestamps();
			$table->rememberToken();
		});
		*/

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
		Schema::drop('Users');
	}

}
