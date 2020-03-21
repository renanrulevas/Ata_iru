<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Endereco_cliente extends Model
{
	protected $table = "endereco_cliente";
	protected $dates = [
		'created_at',
		'updated_at'
	];

	protected $fillable = [
		'id_endereco',
		'id_cliente'
	];
}
