<?php include("cabecalho.php");
 include 'conecta.php';
 include 'banco-produto.php';
 include 'banco-categoria.php';

        $id = $_POST["id"];
        $nome = $_POST["nome"];
        $preco = $_POST["preco"];
        $descricao = $_POST["descricao"];
        $categoria_id = $_POST["categoria_id"];
        if (array_key_exists('usado',$_POST)) {
            $usado = true;
        }else {
            $usado = "false";
        }

        if (alteraProduto( $conexao,$id,$nome, $preco, $descricao,$categoria_id,$usado)) { ?>

            <p class="alert-success"> Produto <?=$nome; ?> de preço <?=$preco; ?> foi alterado com sucesso!; </p>

          <?php } else {
             $msgErro = mysqli_error($conexao);
             ?>
            <p class="alert-danger"> Produto <?=$nome; ?> não foi alterado:<?=$msgErro; ?>; </p>
            <?php }

        mysqli_close($conexao);

          ?>
<?php include('rodape.php'); ?>
