<?php include("cabecalho.php");
 include 'conecta.php';
 include 'banco-produto.php';
 include 'banco-categoria.php';
 include 'logica-usuario.php';

        verificaUsuario();

        $nome = $_POST["nome"];
        $preco = $_POST["preco"];
        $descricao = $_POST["descricao"];
        $categoria_id = $_POST["categoria_id"];
        if (array_key_exists('usado',$_POST)) {
            $usado = true;
        }else {
            $usado = "false";
        }

        if (insereProduto($nome, $preco, $conexao, $descricao,$categoria_id,$usado)) { ?>

            <p class="alert-success"> Produto <?=$nome; ?> de preço <?=$preco; ?> adicionado com sucesso!; </p>

          <?php } else {
             $msgErro = mysqli_error($conexao);
             ?>
            <p class="alert-danger"> Produto <?=$nome; ?> não foi adicionado:<?=$msgErro; ?>; </p>
            <?php }

        mysqli_close($conexao);

          ?>
<?php include('rodape.php'); ?>
