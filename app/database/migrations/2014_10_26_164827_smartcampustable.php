<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Smartcampustable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
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
