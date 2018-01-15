<?php
include ('cabecalho.php');

        $nome = $_GET["nome"];
        $preco = $_GET["preco"];

        $query = "insert into produtos (nome,preco) values('{$nome}',{$preco})";
        $conexao = mysqli_connect('localhost', 'root','','loja'); // ( ip , usuario(padrao 'root') , senha (padrao 'nula'), nome do banco de dados )

        if (mysqli_query($conexao,$query)) { ?>

            <p class="alert-success"> Produto <?php echo $nome; ?> de preço <?php echo $preco; ?> adicionado com sucesso!; </p>

          <?php }
           else { ?>

            <p class="alert-danger"> Produto <?php echo $nome; ?> não foi adicionado com sucesso!; </p>

          <?php }

        mysqli_close($conexao);

          ?>
<?php include ('rodape.php'); ?>
