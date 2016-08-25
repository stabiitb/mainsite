<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class HostelTechEvents extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Hostel_tech_events', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('user',20);
			$table->string('event_name',200);
            $table->string('club', 50);
			$table->string('date_of_event',10);
			$table->string('hostel_no',50);
			$table->string('reviews',500)->nullable();
			$table->string('status',50)->nullable();
			$table->string('documentation_link',100)->nullable();
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
