<?php include ('cabecalho.php');
include 'conecta.php';
include 'banco-categoria.php';

$id = $_GET['id'];
$produto = buscaID($conexao,$id){

}
$categorias = listaCategoria($conexao);
 ?>

<h1>Alterando produto</h1>
  <form action="altera-produto.php" method="post">
    <table class="table">
      <tr>
          <td>Nome:</td>
          <td>
             <input type="text" name="nome" class="form-control"></imput></br>
           </td>
      </tr>
      <tr>
          <td>Preco:</td>
          <td>
             <input type="number" name="preco" class="form-control"></input></br>
           </td>
      </tr>
      <tr>
          <td>Descrição;</td>
          <td>
            <textarea name="descricao" class="form-control"></textarea></br>
          </td>
      </tr>
      <tr>
        <td></td>
        <td> <input type="checkbox" name="usado" value="true"> Usado</td>
      </tr>
      <tr>
          <td>Categoria</td>
          <td>
            <select class="form-control" name="categoria_id">
              <?php foreach ($categorias as $categoria): ?>
                <option value="<?=$categoria['id']?>"> <?=$categoria['nome']?></br>
              <?php endforeach; ?>
            </select>

          </td>
      </tr>
          <td>
            <input type="submit" value="Alterar" class="btn btn-primary"></input>
          </td>
          </table>

  </form>
<?php include 'rodape.php'; ?>
