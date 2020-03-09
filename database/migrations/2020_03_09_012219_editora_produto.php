<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EditoraProduto extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('editora_produto', function (Blueprint $table) {
			$table->integer('editora_id_editora')->unsigned();
			$table->foreign('editora_id_editora')->references('id_editora')->on('editora');
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
		Schema::dropIfExists('editora_produto');
	}
}
