<?php require_once("functions.php"); ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
	<link href="https://use.fontawesome.com/releases/v5.0.1/css/all.css" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

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
	<link rel="stylesheet" href="css/cadastro.css">
	<link rel="stylesheet" href="css/vizprod.css">
	<title>Livraria Ataîru | Seu companheiro de viagem</title>
</head>
<body>
	
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
					<p class="p-0 m-0 pl-2" id="texto_cadastro">
						Entrar ou <br>
						cadastrar
					</p>
				</a>
			</div>
			<div class="carrinho">
				<a href="carrinho.php">
					<i class="fas fa-shopping-cart icon"></i>
				</a>
			</div>
		</div>
		<nav class="navbar navbar-expand-lg navbar-dark p-0">
			<button class="navbar-toggler m-2" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarDropdownMenuLink" aria-expanded="false" aria-label="Alterna navegação">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavDropdown">
				<ul class="navbar-nav">
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fas fa-bars"></i> Categorias
						</a>
						<div class="dropdown-menu m-0" aria-labelledby="navbarDropdownMenuLink">
							<a class="dropdown-item" href="produtos.php">Autoajuda</a>
							<a class="dropdown-item" href="produtos.php">Biografia</a>
							<a class="dropdown-item" href="produtos.php">Filosofia</a>
							<a class="dropdown-item" href="produtos.php">Romance</a>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="produtos.php">Mais Vendidos</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="produtos.php">Lançamentos</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="produtos.php">Ofertas do Dia</a>
					</li>
				</ul>
			</div>
		</nav>

	</header>
	<div class="page-container">
