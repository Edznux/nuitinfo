<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePosition extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('position', function($table){
		        $table->increments('id');
		        $table->string('label');
		        $table->boolean('active')->default(0);
		        $table->string('lng');
		        $table->string('lat');
		        $table->timestamp();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('position');
	}

}
