<?php require_once("cabecalho.php");
      require_once("bancoCategoria.php");
      require_once("logicaUsuario.php");
      require_once("class/Gasto.php");

    if(isset($_GET["falhaDeSegurança"]) && $_GET["falhaDeSegurança"]==true){?>
        <p class="alert-danger">Sem acesso!</p>
<?php }

verificaUsuario();

$categoria = new Categoria();
$categoria->id = 1;

$gasto = new Gasto();
$gasto->categoria = $categoria;

$usado = "";

$categorias = listaCategorias($conexao);
?>

<h1>Formulário de cadastro</h1>
<form action="adicionaGasto.php" method="post">
    <table class="table">
        <?php include("formularioBase.php");?>
        <tr>
            <td><button class="btn btn-primary" type="submit">Cadastrar</button></td>
        </tr>
    </table>
</form>

<?php include("rodape.php"); ?>