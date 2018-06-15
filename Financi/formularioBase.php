
<tr>
    <td>Nome</td>
    <td><input class="form-control" type="text" name="nome" value="<?=$gastos->nome?>" /></td>
</tr>
<tr>
    <td>Preço</td>
    <td><input class="form-control" type="number" name="valor" value="<?=$gastos->valor?>" /></td>
</tr>
<tr>
    <td>Descrição</td>
    <td><textarea class="form-control" name="descricao"><?=$gastos->descricao?></textarea></td>
</tr>
<?php
$pago = $gastos->pago ? "checked='checked'" : "";
?>
<tr>
    <td></td>
    <td><input type="checkbox" name="usado" <?=$gastos->pago?> value="true"> Pago
</tr>
<tr>
    <td>Categoria</td>
    <td>
        <select class="form-control" name="categoria_id">
            <?php foreach($categorias as $categoria) :
                $essaEhACategoria = $gasto->categoria->id == $categoria->id;
                $selecao = $essaEhACategoria ? "selected='selected'" : "";
                ?>
                <option value="<?=$categoria->id?>" <?=$selecao?>>
                    <?=$categoria->nome?>
                </option>
            <?php endforeach ?>
        </select>
    </td>
</tr>