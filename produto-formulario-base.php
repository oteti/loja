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
    <td>Descrição:</td>
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
        <?php foreach ($categorias as $categoria):
          $ehCategoria = $produto['categoria_id'] == $categoria['id'];
          $selecao = $ehCategoria ? "selected = 'selected'" : "";
          ?>
          <option value="<?=$categoria['id']?>" <?=$selecao?>> <?=$categoria['nome']?>
          </option>
        <?php endforeach; ?>
      </select>

    </td>
</tr>
