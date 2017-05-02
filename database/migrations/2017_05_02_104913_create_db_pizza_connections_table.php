<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDbPizzaConnectionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('db_pizza_connections', function(Blueprint $table)
		{
			$table->integer('count', true);
			$table->string('id', 36)->unique('id_UNIQUE');
			$table->string('name', 45)->nullable();
			$table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->string('dough_id', 36)->index('fk_db_bottom_cheese_ingredient_connection_db_pizza_bottoms_idx');
			$table->string('cheese_id', 36)->index('fk_db_bottom_cheese_ingredient_connection_db_cheeses1_idx');
			$table->string('ingredient_id', 36)->index('fk_db_bottom_cheese_ingredient_connection_db_pizza_ingredie_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('db_pizza_connections');
	}

}
