<?php
error_reporting(E_ALL ^ E_NOTICE);
require_once("mostraAlerta.php");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>FinanCi</title>
    <link href="css/bootstrap.css" rel="stylesheet"/>
    <link href="css/financi.css" rel="stylesheet"/>
</head>
<body>

    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php">FinanCi</a>
            </div>
            <div>
                <ul class="nav navbar-nav">
                    <li><a href="formularioGasto.php">Adicionar Gasto</a></li>
                    <li><a href="listaGasto.php">Gastos</a></li>
                    <li><a href="contato.php">Contato</a></li>
                </ul>
            </div>
        </div>
    </div>
        <div class="container">
            <div class="principal">
                <?php mostraAlerta("success")?>
                <?php mostraAlerta("danger")?>
