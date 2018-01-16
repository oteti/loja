<?php include("cabecalho.php");
 include 'conecta.php';
 include 'banco-produto.php';



        $nome = $_GET["nome"];
        $preco = $_GET["preco"];
        if (insereProduto($nome, $preco, $conexao)) { ?>

            <p class="alert-success"> Produto <?php echo $nome; ?> de preço <?php echo $preco; ?> adicionado com sucesso!; </p>

          <?php } else {
             $msgErro = mysqli_error($conexao);
             ?>
            <p class="alert-danger"> Produto <?php echo $nome; ?> não foi adicionado:<?php echo $msgErro; ?>; </p>
            <?php }

        mysqli_close($conexao);

          ?>
<?php include('rodape.php'); ?>
