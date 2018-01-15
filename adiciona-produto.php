<?php include 'cabecalho.php'; ?>
  <?php
  $nomeProduto = $_GET["nome"];
  $preco = $_GET["preco"];
   ?>
  <p class="alert-success">
     Produto <?php echo $nomeProduto; ?> de preço <?php echo $preco; ?> adicionado com sucesso!;
  </p>
<?php include 'rodape.php'; ?>
