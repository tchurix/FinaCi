<?php require_once("cabecalho.php");
      require_once("bancoGastos.php");
      ?>

<table class="table table-striped table-bordered">

    <?php
    $gastos = listaGasto($conexao);
    foreach($gastos as $gasto) :
        ?>
        <tr>
            <td><?= $gasto->nome ?></td>
            <td><?= $gasto->valor ?></td>
            <td><?= substr($gasto->descricao, 0, 40) ?></td>
            <td><?= $gasto->categoria->nome ?></td>
            <td><a class="btn btn-primary" href="formularioAlteraGasto.php?id=<?=$gasto->id?>">alterar</a></td>
            <td>
                <form action="removerGasto.php" method="post">
                    <input type="hidden" name="id" value="<?=$gasto->id?>" />
                    <button class="btn btn-danger">remover</button>
                </form>
            </td>
        </tr>
        <?php
    endforeach
    ?>
</table>

<?php include("rodape.php"); ?>


