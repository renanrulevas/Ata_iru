<?php require_once("functions.php"); ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <link href="https://use.fontawesome.com/releases/v5.0.1/css/all.css" rel="stylesheet">
    <!-- Carousel Glide.js -->
    <link rel="stylesheet" href="js/glide-3.4.1/dist/css/glide.core.min.css">
    <link rel="stylesheet" href="js/glide-3.4.1/dist/css/glide.theme.min.css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/index.css" type="text/css">
    <link rel="stylesheet" href="css/produtos.css" type="text/css">
    <link rel="stylesheet" href="css/login.css" type="text/css">
    <link rel="stylesheet" href="css/conta.css" type="text/css">
    <link rel="stylesheet" href="css/carrinho.css" type="text/css">
    <link rel="stylesheet" href="css/contato.css" type="text/css">
    <link rel="stylesheet" href="css/faq.css" type="text/css">
    <link rel="stylesheet" href="css/about.css" type="text/css">
    <title>Livraria Ataîru | Seu companheiro de viagem</title>
</head>
<body>
    <div class="page-container">
        <header>
            <div id="menu">
                <div class="logo">
                    <a href="index.php"><img src="img/LivrariaAtaîru-logo-Courier_New.png" alt="Logo Livraria Ataîru"></a>
                </div>
                <div class="busca">
                    <form>
                        <input class="search" type="text" placeholder="Buscar...">
                        <button class="submit"><i class="fas fa-search"></i></button>
                    </form>
                </div>
                <div class="login">
                    <a href="login.php">
                        <i class="fas fa-user icon"></i>
                        <p>
                            Entre ou <br>
                            cadastre-se
                        </p>
                    </a>
                </div>
                <div class="carrinho">
                    <a href="carrinho.php">
                        <i class="fas fa-shopping-cart icon"></i>
                    </a>
                </div>
            </div>
            <nav>
                <ul>
                    <li>
                        <a href="#"><i class="fas fa-bars"></i> Categorias <i class="fas fa-chevron-down"></i></a>
                        <ul class="dropdown">
                            <li><a href="produtos.php">Autoajuda</a></li>
                            <li><a href="produtos.php">Biografia</a></li>
                            <li><a href="produtos.php">Filosofia</a></li>
                            <li><a href="produtos.php">Romance</a></li>
                        </ul>
                    </li>
                    <li><a href="produtos.php">Mais vendidos</a></li>
                    <li><a href="produtos.php">Lançamentos</a></li>
                    <li><a href="produtos.php">Ofertas do dia</a></li>
                </ul>
            </nav>
        </header>
