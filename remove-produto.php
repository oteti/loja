<?php
include 'conecta.php';
include 'banco-produto.php';

$id = $_POST['id'];
removeProduto($id, $conexao);

header("Location: produto-lista.php?removido=true");
die();
