<?php require_once ('cabecalho.php');
  require_once 'banco-categoria.php';
  require_once 'logica-usuario.php';

  $categorias = listaCategoria($conexao);
  verificaUsuario();
  $produto = array("nome" => "", "preco"=>"", "descricao" =>"", "categoria_id"=>"1");
  $usado = "";
   ?>

  <h1>Formulário de cadastro</h1>
    <form action="adiciona-produto.php" method="post">
      <table class="table">
          <?php include 'produto-formulario-base.php'; ?>
            <td>
              <button type="submit" value="cadastrar" class="btn btn-primary">Cadastrar</button>
            </td>
            </table>

    </form>
<?php include 'rodape.php'; ?>
