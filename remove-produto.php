<?php
require_once 'banco-produto.php';
require_once 'logica-usuario.php';

$id = $_POST['id'];
removeProduto($id, $conexao);
$_SESSION["success"] = "Produto removido com sucesso";
header("Location: produto-lista.php");
die();
