<?php
include 'conecta.php';
include 'banco-produto.php';

$id = $_GET['id'];
removeProduto($id, $conexao);

header("Location: produto-lista.php?removido=true");
die();
