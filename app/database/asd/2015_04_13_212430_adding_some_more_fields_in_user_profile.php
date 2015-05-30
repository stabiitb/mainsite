<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddingSomeMoreFieldsInUserProfile extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
	   DB::statement('ALTER TABLE Users CHANGE Name name char(50)');
	   DB::statement('ALTER TABLE Users CHANGE Hostel hostel char(50)');
	   DB::statement('ALTER TABLE Users CHANGE `Room No` room char(50)');
		//
		Schema::table('Users', function($table)
		{	

			$table->string('facad',50)->nullable();
			$table->string('facad_ldap',50)->nullable();
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
