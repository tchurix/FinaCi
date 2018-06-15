<?php require_once("cabecalho.php");
      require_once("bancoCategoria.php");
      require_once("bancoGastos.php");

$id = $_GET['id'];
$gasto = buscaGasto($conexao, $id);
$categorias = listaCategorias($conexao);

$selecao = $gasto->pago ? "checked='checked'" : "";
$gasto->pago = $selecao;

?>

<h1>Alterando produto</h1>
<form action="alteraGasto.php" method="post">
    <input type="hidden" name="id" value="<?=$gasto->id?>" />
    <table class="table">

        <?php include("formularioBase.php"); ?>

        <tr>
            <td><button class="btn btn-primary" type="submit">Alterar</button></td>
        </tr>
    </table>
</form>

<?php include("rodape.php"); ?>
