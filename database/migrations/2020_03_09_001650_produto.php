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
			$table->string('isbn')->unique();
			$table->string('nome');
			$table->string('autor');
			$table->string('sinopse')->nullable();
			$table->integer('produto_id_categoria')->unsigned();
			$table->foreign('produto_id_categoria')->references('id_categoria')->on('produto_categoria');
			$table->string('numero_paginas')->nullable();
			$table->string('ano_publicacao')->nullable();
			$table->string('edicao')->nullable();
			$table->string('editora');
			$table->string('preco');
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
