<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Cliente extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cliente', function (Blueprint $table) {
			$table->increments('id_cliente');
			$table->string('nome_completo', 200);
			$table->string('cpf', 11)->unique();
			$table->string('email', 45);
			$table->integer('telefone')->nullable();
			$table->string('senha', 15);
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
		Schema::dropIfExists('cliente');
	}
}
