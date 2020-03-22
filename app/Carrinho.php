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
		'id_cliente',
		'id_pedido'
	];

	public function produto()
	{
		return $this->hasMany('App\Produto');
	}
}
