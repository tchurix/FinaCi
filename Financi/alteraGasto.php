<?php require_once("cabecalho.php");
      require_once("bancoGastos.php");
      require_once("class/Gasto.php");
      require_once("class/Categoria.php");

$categoria = new Categoria();
$categoria->id = $_POST['categoria_id'];

$gasto = new Gasto();
$gasto->id = $_POST['id'];
$gasto->nome = $_POST['nome'];
$gasto->valor = $_POST['valor'];
$gasto->descricao = $_POST['descricao'];

if(array_key_exists('pago', $_POST)) {
    $gasto->pago = "true";
} else {
    $gasto->pago = "false";
}

$gasto->categoria = $categoria;

if(alterarGasto($conexao, $gasto)) { ?>
    <p class="text-success">O gasto <?= $gasto->nome; ?>, <?= $gasto->valor; ?> alterado com sucesso!</p>
<?php } else {
    $msg = mysqli_error($conexao);
    ?>
    <p class="text-danger">O gasto <?= $gasto->nome; ?> não foi alterado: <?= $msg ?></p>
    <?php
}
?>

<?php include("rodape.php"); ?>