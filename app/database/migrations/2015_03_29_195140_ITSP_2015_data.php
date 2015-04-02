<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ITSP2015Data extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('ITSP_2015_users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('team',500);
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
			$tablr->string('')
			$table->timestamps();
			$table->rememberToken();
		});


	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
		Schema::drop('ITSP_2015_users');
	}

}
