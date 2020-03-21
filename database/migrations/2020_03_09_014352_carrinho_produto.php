<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CarrinhoProduto extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('carrinho_produto', function (Blueprint $table) {
			$table->integer('carrinho_id_cliente')->unsigned();
			$table->foreign('carrinho_id_cliente')->references('carrinho_id_cliente')->on('carrinho');
			$table->integer('produto_id_produto')->unsigned();
			$table->foreign('produto_id_produto')->references('id_produto')->on('produto');
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
		Schema::dropIfExists('carrinho_produto');
	}
}
