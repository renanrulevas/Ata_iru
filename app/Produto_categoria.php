<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto_categoria extends Model
{
	protected $table = "produto_categoria";
	protected $dates = [
		'created_at',
		'updated_at'
	];

	protected $fillable = [
		'nome_categoria'
	];
}
