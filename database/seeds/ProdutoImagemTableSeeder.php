<?php

use Illuminate\Database\Seeder;
use App\Produto_imagem;
use Illuminate\Support\Facades\DB;

class ProdutoImagemTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$produtos_imagem = collect([
			[
				'nome' => 'img/livros/9788547000646.jpg',
				'alt' => 'Minha História por Michelle Obama',
				'isbn' => '9788547000646'
			],

			[
				'nome' => 'img/livros/9788535923438.jpg',
				'alt' => 'Eu sou Malala por Malala Yousafzai',
				'isbn' => '9788535923438'
			],

			[
				'nome' => 'img/livros/9788576082675.jpg',
				'alt' => 'Código Limpo: Habilidades Práticas do Agile Software por Robert C. Martin',
				'isbn' => '9788576082675'
			],

			[
				'nome' => 'img/livros/9788550800653.jpg',
				'alt' => 'Domain-Driven Design: Atacando as Complexidades no Coração do Software por Eric Evans',
				'isbn' => '9788550800653'
			],

			[
				'nome' => 'img/livros/9788584424573.jpg',
				'alt' => 'Drácula - Edição De Luxo por Bram Stoker',
				'isbn' => '9788584424573'
			],

			[
				'nome' => 'img/livros/9788594318237.jpg',
				'alt' => 'O Morro Dos Ventos Uivantes por Emily Brontë',
				'isbn' => '9788594318237'
			],

			[
				'nome' => 'img/livros/9788525056009.jpg',
				'alt' => 'Admirável Mundo Novo por Aldous Huxley',
				'isbn' => '9788525056009'
			],

			[
				'nome' => 'img/livros/9788532508126.jpg',
				'alt' => 'A Hora da Estrela por Clarice Lispector',
				'isbn' => '9788532508126'
			],

			[
				'nome' => 'img/livros/9788520927823.jpg',
				'alt' => 'O Cortiço por Aluísio de Azevedo',
				'isbn' => '9788520927823'
			]
		]);

		$produtos_imagem->map(function ($item) {
			$novaImagem = new Produto_imagem();
			$novaImagem->nome = $item['nome'];
			$novaImagem->alt = $item['alt'];
			$novaImagem->id_produto = DB::table('produto')->where('isbn', $item['isbn'])->value('id_produto');
			$novaImagem->save();
		});
	}
}
