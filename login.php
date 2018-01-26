<?php require_once 'banco-usuario.php';
require_once 'logica-usuario.php';

$usuario = buscaUsuario($conexao, $_POST["email"],$_POST["senha"]);
if ($usuario == null) {
  $_SESSION["danger"] = "Usuario ou senha invalida";
  header("Location: index.php");
} else {
  $_SESSION["success"] = "Logado com sucesso";
  header("Location: index.php");
  logaUsuario($usuario["email"]);
}
die();
