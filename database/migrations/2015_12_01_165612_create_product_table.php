<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('product', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('productId');
			$table->string('name');
			$table->integer('weight')->nullable();
			$table->integer('caseMakeup');
			$table->decimal('unitPrice_ws',7,2);
		  $table->decimal('casePrice_ws',7,2);
			$table->decimal('unitPrice_tf',7,2);
			$table->decimal('casePrice_tf',7,2);
			$table->decimal('priceConsumer',7,2);
			$table->string('category');
			$table->integer('freeIssueRate');
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
		Schema::drop('product');
	}

}
