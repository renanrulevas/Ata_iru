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
		'produto_id_produto',
		'pedido_id_pedido',
		'quantidade'
	];
}
