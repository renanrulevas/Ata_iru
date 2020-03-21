<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Carrinho extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('carrinho', function (Blueprint $table) {
			$table->unsignedInteger('id_cliente');
			$table->foreign('id_cliente')->references('id_cliente')->on('cliente');
			$table->unsignedInteger('id_pedido');
			$table->foreign('id_pedido')->references('id_pedido')->on('pedido');
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
		Schema::dropIfExists('carrinho');
	}
}
