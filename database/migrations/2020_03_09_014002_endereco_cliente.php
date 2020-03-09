<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EnderecoCliente extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('endereco_cliente', function (Blueprint $table) {
			$table->integer('endereco_id_endereco')->unsigned();
			$table->foreign('endereco_id_endereco')->references('id_endereco')->on('endereco');
			$table->integer('cliente_id_cliente')->unsigned();
			$table->foreign('cliente_id_cliente')->references('id_cliente')->on('cliente');
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
		Schema::dropIfExists('endereco_cliente');
	}
}
