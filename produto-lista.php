<?php include 'cabecalho.php';
include 'conecta.php';
include 'banco-produto.php';

if(array_key_exists("removido", $_GET) && $_GET['removido']=='true') { ?>
<p class="alert-success">Produto apagado com sucesso.</p>
<?php }

$produtos = listaProdutos($conexao);
?>

<table class="table table-striped table-bordered" >

<?php
    foreach ($produtos as $produto) :
?>
    <tr>
      <td> <?php echo $produto['nome'] . "<br/>"; ?> </td>
      <td> <?php echo $produto['preco'] . "<br/>"; ?> </td>
      <td>
         <a href="remove-produto.php?id=<?=$produto['id']?>" class="btn btn-danger">remover</a>
      </td>
    </tr>

<?php
      endforeach
?>
</table>

<?php include 'rodape.php'; ?>
