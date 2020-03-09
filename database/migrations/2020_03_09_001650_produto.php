<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Produto extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('produto', function (Blueprint $table) {
			$table->increments('id_produto');
			$table->string('isbn', 45)->unique();
			$table->string('nome', 100);
			$table->string('autor', 100);
			$table->string('sinopse', 400)->nullable();
			$table->string('genero', 45)->nullable();
			$table->string('numero_paginas', 45)->nullable();
			$table->string('ano_publicacao', 45)->nullable();
			$table->string('edicao', 45)->nullable();
			$table->string('preco', 45);
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
		Schema::dropIfExists('produto');
	}
}
