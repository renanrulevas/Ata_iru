<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
	protected $table = "pedido";
	protected $dates = [
		'created_at',
		'updated_at'
	];

	protected $fillable = [
		'status'
	];
}
