<?php

$livros = [
    [
        "titulo" => "Livro 1",
        "imagem" => "img/livro_placeholder.png",
        "nome" => "Nome",
        "sobrenome" => "Sobrenome",
        "preco" => "R$1,99",
        "desconto" => "R$0,99"
    ],
    [
        "titulo" => "Livro 2",
        "imagem" => "img/livro_placeholder.png",
        "nome" => "Nome",
        "sobrenome" => "Sobrenome",
        "preco" => "R$1,99",
        "desconto" => "R$0,99"
    ],
    [
        "titulo" => "Livro 3",
        "imagem" => "img/livro_placeholder.png",
        "nome" => "Nome",
        "sobrenome" => "Sobrenome",
        "preco" => "R$1,99",
        "desconto" => "R$0,99"
    ],
    [
        "titulo" => "Livro 4",
        "imagem" => "img/livro_placeholder.png",
        "nome" => "Nome",
        "sobrenome" => "Sobrenome",
        "preco" => "R$1,99",
        "desconto" => "R$0,99"
    ],
    [
        "titulo" => "Livro 5",
        "imagem" => "img/livro_placeholder.png",
        "nome" => "Nome",
        "sobrenome" => "Sobrenome",
        "preco" => "R$1,99",
        "desconto" => "R$0,99"
    ],
];

function getTitulo($id) {
    global $livros;
    return $livros[$id]["titulo"];
}

function getImagem($id) {
    global $livros;
    return $livros[$id]["imagem"];
}

function getNome($id) {
    global $livros;
    return $livros[$id]["nome"];
}

function getSobrenome($id) {
    global $livros;
    return $livros[$id]["sobrenome"];
}

function getPreco($id) {
    global $livros;
    return $livros[$id]["preco"];
}

function getDesconto($id) {
    global $livros;
    return $livros[$id]["desconto"];
}

function listarLivrosDestaques() {
    
    global $livros;

    foreach($livros as $index => $livro) {

        echo "<li class='glide__slide'>
                <img src='$livro[imagem]' alt='' />
                <h3>$livro[titulo]</h3>
                <small>$livro[sobrenome], $livro[nome]</small>
                <h4>$livro[preco]</h4>
                <button class='add_carrinho'>Ver mais</button>
            </li>";
    }
}

function listarLivrosOfertas() {
    
    global $livros;

    foreach($livros as $index => $livro) {

        echo "<li class='glide__slide'>
                <img src='$livro[imagem]' alt='' />
                <h3>$livro[titulo]</h3>
                <small>$livro[sobrenome], $livro[nome]</small>
                <h4 class='desconto'>$livro[desconto]</h4>
                <h4>$livro[preco]</h4>
                <button class='add_carrinho'>Ver mais</button>
            </li>";
    }
}

function listarLivrosProdutos() {
    
    global $livros;

    foreach($livros as $index => $livro) {

        echo "<li>
                <img src='$livro[imagem]' alt='' />
                <h3>$livro[titulo]</h3>
                <small>$livro[sobrenome], $livro[nome]</small>
                <h4>$livro[preco]</h4>
                <button class='add_carrinho'>Ver mais</button>
            </li>";
    }
}