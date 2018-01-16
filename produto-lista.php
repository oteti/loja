<?php include 'cabecalho.php';
include 'conecta.php';
include 'banco-produto.php';

$produtos = listaProdutos($conexao);
?>

<table class="table table-striped table-bordered" >

<?php
    foreach ($produtos as $produto) :
?>
    <tr>
      <td> <?php echo $produto['nome'] . "<br/>"; ?> </td>
      <td> <?php echo $produto['preco'] . "<br/>"; ?> </td>
    </tr>

<?php
      endforeach
?>
</table>

<?php include 'rodape.php'; ?>
