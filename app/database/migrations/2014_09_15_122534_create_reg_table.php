<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
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
