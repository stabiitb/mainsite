<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class LinksForProject extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('ITSP', function($table)
		{	

			$table->string('yotubeLink1',100)->nullable();
			$table->string('yotubeLink2',100)->nullable();
			$table->string('presentationLink',100)->nullable();
			$table->string('githubLink',100)->nullable();
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
