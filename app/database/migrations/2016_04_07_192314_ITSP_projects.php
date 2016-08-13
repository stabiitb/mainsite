<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ITSPProjects extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('ITSP_Projects', function(Blueprint $table)
		{
			$table->increments('team_id');
			$table->integer('user1')->unsigned()->nullable();
			$table->integer('user2')->unsigned()->nullable();
			$table->integer('user3')->unsigned()->nullable();
			$table->integer('user4')->unsigned()->nullable();
			$table->foreign('user1')->references('id')->on('Users');
			$table->foreign('user2')->references('id')->on('Users');
			$table->foreign('user3')->references('id')->on('Users');
			$table->foreign('user4')->references('id')->on('Users');
			$table->string('abstractlink',200);
			$table->string('year',4);
			$table->string('team_name',200);
			$table->string('project_name',200);
			$table->string('club',50);
			$table->string('reviews',500)->nullable();
			$table->string('status',50)->nullable();
			$table->string('githublink',100)->nullable();
			$table->string('presentationlink',100)->nullable();
			$table->string('youtubelink',100)->nullable();
			$table->timestamps();
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
