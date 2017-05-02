<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPzConnectionsIngredientsPizzaPadCheeseTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('pz_connections_ingredients_pizzaPad_cheese', function(Blueprint $table)
		{
			$table->foreign('cheese_id', 'fk_pz_connections_ingredients_pizzaname_pz_cheese1')->references('id')->on('pz_cheese')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('ingredients_id', 'fk_pz_connections_ingredients_pizzaname_pz_ingredients1')->references('id')->on('pz_ingredients')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('pizzaPad_id', 'fk_pz_connections_ingredients_pizzaname_pz_pizzaname')->references('id')->on('pz_pizzaPad')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('pz_connections_ingredients_pizzaPad_cheese', function(Blueprint $table)
		{
			$table->dropForeign('fk_pz_connections_ingredients_pizzaname_pz_cheese1');
			$table->dropForeign('fk_pz_connections_ingredients_pizzaname_pz_ingredients1');
			$table->dropForeign('fk_pz_connections_ingredients_pizzaname_pz_pizzaname');
		});
	}

}
