<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrinho extends Model
{
	protected $table = "carrinho";
	protected $dates = [
		'created_at',
		'updated_at'
	];

	protected $fillable = [
		'carrinho_id_cliente',
		'carrinho_id_pedido'
	];
}
