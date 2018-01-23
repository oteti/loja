<?php
  include 'logica-usuario.php';
  logout();
  $_SESSION["success"] = "O usuario foi deslogado com sucesso";
  header("Location: index.php");
  die();
