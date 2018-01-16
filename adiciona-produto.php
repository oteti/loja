<?php include("cabecalho.php"); ?>
<?php
        function insereProduto($nome, $preco, $conexao){
            $query = "insert into produtos (nome,preco) values('{$nome}',{$preco})";
            return mysqli_query($conexao,$query);
        }

        $nome = $_GET["nome"];
        $preco = $_GET["preco"];
        $conexao = mysqli_connect('localhost', 'root','','loja'); // ( ip , usuario(padrao 'root') , senha (padrao 'nula'), nome do banco de dados )

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
