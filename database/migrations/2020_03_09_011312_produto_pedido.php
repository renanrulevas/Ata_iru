<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProdutoPedido extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('produto_pedido', function (Blueprint $table) {
			$table->integer('produto_id_produto')->unsigned();
			$table->foreign('produto_id_produto')->references('id_produto')->on('produto');
			$table->integer('pedido_id_pedido')->unsigned();
			$table->foreign('pedido_id_pedido')->references('id_pedido')->on('pedido');
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
		Schema::dropIfExists('produto_pedido');
	}
}
