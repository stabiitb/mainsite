<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CMOSChallengeRegistration extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
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
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
