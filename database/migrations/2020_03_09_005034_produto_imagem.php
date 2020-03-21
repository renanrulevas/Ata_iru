<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProdutoImagem extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('produto_imagem', function (Blueprint $table) {
			$table->increments('id_imagem');
			$table->string('nome');
			$table->string('alt')->nullable();
			$table->unsignedInteger('id_produto');
			$table->foreign('id_produto')->references('id_produto')->on('produto');
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
		Schema::dropIfExists('produto_imagem');
	}
}
