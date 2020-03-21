<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrinho_produto extends Model
{
	protected $table = "carrinho_produto";
	protected $dates = [
		'created_at',
		'updated_at'
	];

	protected $fillable = [
		'carrinho_id_cliente',
		'produto_id_produto'
	];
}
