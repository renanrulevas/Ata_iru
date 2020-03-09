<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ImagemProduto extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('imagem_produto', function (Blueprint $table) {
			$table->increments('id_imagem');
			$table->string('nome', 100);
			$table->string('alt', 100)->nullable();
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
		Schema::dropIfExists('imagem_produto');
	}
}
