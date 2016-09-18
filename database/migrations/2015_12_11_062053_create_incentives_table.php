<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIncentivesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('incentives', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('productId');
			$table->decimal('p90orMore',7,2);
			$table->decimal('p100orMore',7,2);
			$table->decimal('p110orMore',7,2);
			$table->string('userId');
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
		Schema::drop('incentives');
	}

}
