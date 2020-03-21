<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Produto;
use Faker\Generator as Faker;

$factory->define(Produto::class, function (Faker $faker) {
	return [
		'isbn' => $faker->isbn13(),
		'nome' => $faker->sentence(),
		'autor' => $faker->name,
		'sinopse' => $faker->paragraph,
		'categoria' => $faker->randomNumber(4),
		'numero_paginas' => $faker->randomNumber(3),
		'ano_publicacao' => $faker->year($max = 'now'),
		'edicao' => $faker->randomNumber(1),
		'preco' => $faker->randomFloat(2, 20, 150)
	];
});
