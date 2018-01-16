<?php include 'cabecalho.php'; ?>
<h1>Formulário de cadastro</h1>
  <form>
    <table class="table">
      <tr>
          <td>Nome:</td>
          <td>
             <input type="text" name="nome" class="form-control"></br>
           </td>
      </tr>
      <tr>
          <td>Preco:</td>
          <td>
             <input type="number" name="preco" class="form-control"></br>
           </td>
      </tr>
      <tr>
          <td></td>
          <td>
            <input type="submit" value="cadastrar" class="btn btn-primary"></input>
          </td>
      </tr>
    </table>

  </form>
<?php include 'rodape.php'; ?>
