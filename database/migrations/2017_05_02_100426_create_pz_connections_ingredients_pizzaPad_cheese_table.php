<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePzConnectionsIngredientsPizzaPadCheeseTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pz_connections_ingredients_pizzaPad_cheese', function(Blueprint $table)
		{
			$table->integer('count', true);
			$table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->string('pizzaPad_id', 36)->index('fk_pz_connections_ingredients_pizzaname_pz_pizzaname_idx');
			$table->string('ingredients_id', 36)->index('fk_pz_connections_ingredients_pizzaname_pz_ingredients1_idx');
			$table->string('cheese_id', 36)->index('fk_pz_connections_ingredients_pizzaname_pz_cheese1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pz_connections_ingredients_pizzaPad_cheese');
	}

}
