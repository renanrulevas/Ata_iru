<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Editora extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('editora', function (Blueprint $table) {
			$table->increments('id_editora');
			$table->integer('cnpj')->unique();
			$table->string('razao_social', 45);
			$table->string('nome_contato', 100)->nullable();
			$table->string('email', 45)->nullable();
			$table->integer('telefone')->nullable();
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
		Schema::dropIfExists('editora');
	}
}
