<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
	protected $table = "produto";
	protected $dates = [
		'created_at',
		'updated_at'
	];

	protected $fillable = [
		'isbn',
		'nome',
		'autor',
		'sinopse',
		'produto_id_categoria',
		'numero_paginas',
		'ano_publicacao',
		'edicao',
		'editora',
		'preco'
	];
}
