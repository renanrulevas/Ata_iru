<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produto;
use App\Produto_categoria;

class ProdutoController extends Controller
{
	public function index()
	{
		return view('produtos');
	}

	public function show($id_produto)
	{
		return view('produto');
	}

	public function admin()
    {
		$produto = Produto::all();
		$categoria = Produto_categoria::all();
        return view('admin', compact('produto', 'categoria'));
	}

	public function create()
    {
        $categorias = Produto_categoria::all();

        return view('cadastroProduto', compact('categorias'));
	}
	
	
	public function insert(Request $request)
    {

		$produto = new Produto();

        $produto->nome = $request->nome;
		$produto->sinopse = $request->sinopse;
		$produto->autor = $request->autor;
		$produto->isbn = $request->isbn;
		$produto->numero_paginas = $request->numero_paginas;
		$produto->ano_publicacao = $request->ano_publicacao;
		$produto->edicao = $request->edicao;
		$produto->editora = $request->editora;
        $produto->preco = $request->preco;
        $produto->id_categoria = $request->categoria;

        $arquivo = $request->file('imagem');
        if (!empty($arquivo)) {
            // salvando
            $nomePasta = 'uploads';
            $arquivo->storePublicly($nomePasta); // nome temporario do arquivo
            $caminhoAbsoluto = public_path() . "/storage/$nomePasta";
            $nomeArquivo = $arquivo->getClientOriginalName(); // faz a hash para nome do arquivo
            $caminhoRelativo = "/storage/$nomePasta/$nomeArquivo";
            // movendo
            $arquivo->move($caminhoAbsoluto, $nomeArquivo);
            $produto->imagem = $caminhoRelativo;
        }

        $produto->save();

        return redirect('/admin/produto');
    }

}
