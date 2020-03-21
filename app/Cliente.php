<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
	protected $table = "cliente";
	protected $dates = [
		'created_at',
		'updated_at'
	];

	protected $fillable = [
		'nome_completo',
		'cpf',
		'email',
		'telefone',
		'senha'
	];
}
