<?php require_once("bancoUsuario.php");
      require_once("logicaUsuario.php");

$usuario = buscaUsuario($conexao, $_POST["email"],$_POST["senha"]);
if($usuario == null){
    $_SESSION["danger"] = "usuario ou senha inválida!";
    header("Location: index.php");

}else{
    $_SESSION["success"] = "Usuário logado com sucesso!";
    logaUsuario($usuario['email']);
    header("Location: index.php?");
}
die();


