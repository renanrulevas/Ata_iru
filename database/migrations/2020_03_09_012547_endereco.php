<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Endereco extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('endereco', function (Blueprint $table) {
			$table->increments('id_endereco');
			$table->string('logradouro', 200);
			$table->string('numero', 45);
			$table->string('complemento', 45)->nullable();
			$table->string('cidade', 45);
			$table->string('uf', 2);
			$table->integer('cep');
			$table->integer('editora_id_editora')->unsigned();
			$table->foreign('editora_id_editora')->references('id_editora')->on('editora');
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
		Schema::dropIfExists('endereco');
	}
}
