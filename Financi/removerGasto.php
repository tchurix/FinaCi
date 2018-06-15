<?php require_once("cabecalho.php");
      require_once("bancoGastos.php");
      require_once("logicaUsuario.php");

$id = $_POST['id'];
removeGasto($conexao, $id);
$_SESSION["success"]="Produto removido com sucesso!";
header("Location: listaGasto.php?removido=true");
die();
?>

