<?php include ('cabecalho.php');
include 'conecta.php';
include 'banco-categoria.php';
include 'banco-produto.php';

$id = $_GET['id'];
$produto = buscaProduto($conexao,$id);
$categorias = listaCategoria($conexao);
$usado = $produto['usado'] ? "checked='checked'" : "";
 ?>

<h1>Alterando produto</h1>
  <form action="altera-produto.php" method="post">
    <table class="table">
      <tr>
          <td>Nome:</td>
          <td>
             <input type="text" name="nome" class="form-control" value="<?=$produto['nome']?>"></imput></br>
           </td>
      </tr>
      <tr>
          <td>Preco:</td>
          <td>
             <input type="number" name="preco" class="form-control" value="<?=$produto['preco']?>"></input></br>
           </td>
      </tr>
      <tr>
          <td>Descrição;</td>
          <td>
            <textarea name="descricao" class="form-control"><?=$produto['descricao']?></textarea></br>
          </td>
      </tr>
      <tr>
        <td></td>
        <td> <input type="checkbox" name="usado" value="true" <?=$usado?>> Usado</td>
      </tr>
      <tr>
          <td>Categoria</td>
          <td>
            <select class="form-control" name="categoria_id">
              <?php foreach ($categorias as $categoria): ?>
                <option value="<?=$categoria['id']?>"> <?=$categoria['nome']? ></br>
                $ehCategoria= $produto['categoria_id'] == $categoria_id;
                $ehCategoria ? "selected = 'selected'" : "";
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
