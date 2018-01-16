<?php include("cabecalho.php");
 include 'conecta.php';
 include 'banco-produto.php';



        $nome = $_POST["nome"];
        $preco = $_POST["preco"];
        $descricao = $_POST["descricao"];
        if (insereProduto($nome, $preco, $conexao, $descricao)) { ?>

            <p class="alert-success"> Produto <?=$nome; ?> de preço <?=$preco; ?> adicionado com sucesso!; </p>

          <?php } else {
             $msgErro = mysqli_error($conexao);
             ?>
            <p class="alert-danger"> Produto <?=$nome; ?> não foi adicionado:<?=$msgErro; ?>; </p>
            <?php }

        mysqli_close($conexao);

          ?>
<?php include('rodape.php'); ?>
