<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto_pedido extends Model
{
	protected $table = "produto_imagem";
	protected $dates = [
		'created_at',
		'updated_at'
	];

	protected $fillable = [
		'id_produto',
		'id_pedido',
		'quantidade'
	];
}
