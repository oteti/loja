<?php
include 'conecta.php';
include 'banco-produto.php';
include 'logica-usuario.php';

$id = $_POST['id'];
removeProduto($id, $conexao);
$_SESSION["success"] = "Produto removido com sucesso";
header("Location: produto-lista.php");
die();
