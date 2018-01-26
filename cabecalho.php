<?php
include 'mostra-alerta.php';
error_reporting(E_ALL ^ E_NOTICE);
 ?>
<html>
<head>
    <title>Minha loja</title>
    <meta charset="utf-8">
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/loja.css" rel="stylesheet" />
</head>
<body>
		<div class="container">
			<nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
					<ul class="navbar-nav">
	 						<li class="nav-item active">
		 							<a href="index.php" class="navbar-brand">Minha Loja</a>
	 						</li>
							<li class="nav-item">
									<a class="nav-link" href="produto-formulario.php">Adiciona produto</a>
						 	</li>
							<li class="nav-item">
								  <a class="nav-link" href="produto-lista.php">Produtos</a>
							</li>
							<li class="nav-item">
								  <a class="nav-link" href="contato.php">Contato</a>
							</li>
 					</ul>
			</nav>
    </div>

    <div class="container">

    <div class="principal">
<?php mostraAlerta("success");
mostraAlerta("danger"); ?>
