<?php
require_once("conexao.php");
require_once("class/Categoria.php");
require_once("class/Gasto.php");

function listaGasto($conexao) {

    $gastos = array();
    $resultado = mysqli_query($conexao, "select g.*, c.nome as categoria_nome 
        from gastos as g join categorias as c on c.id=g.categoria_id");

    while($gasto_array = mysqli_fetch_assoc($resultado)) {

        $categoria = new Categoria();
        $categoria->nome = $gasto_array['categoria_nome'];

        $gasto = new Gasto();
        $gasto->id = $gasto_array['id'];
        $gasto->nome = $gasto_array['nome'];
        $gasto->descricao = $gasto_array['descricao'];
        $gasto->categoria=$categoria;
        $gasto->valor = $gasto_array['valor'];
        $gasto->pago = $gasto_array['pago'];
        array_push($gastos, $gasto);
    }

    return $gastos;
}

function insereGasto($conexao, Gasto $gasto) {
    $query = "insert into gastos (nome, valor, descricao, categoria_id, pago)
        values ('{$gasto->nome}', {$gasto->valor}, '{$gasto->descricao}', {$gasto->categoria->id}, 
          {$gasto->pago})";
    return mysqli_query($conexao, $query);
}

function alterargasto($conexao, Gasto $gasto) {
    $query = "update gastos set nome = '{$gasto->nome}', valor = {$gasto->valor}, descricao = '{$gasto->descricao}',
        categoria_id= {$gasto->categoria->id}, pago = {$gasto->pago} where id = '{$gasto->id}'";
    return mysqli_query($conexao, $query);
}

function removeGasto($conexao, $id) {
    $query = "delete from gastos where id = {$id}";
    return mysqli_query($conexao, $query);
}

function buscaGasto($conexao, $id) {
    $query = "select * from gastos where id = {$id}";
    $resultado = mysqli_query($conexao, $query);

    var_dump($resultado) and die;
    $categoria = new Categoria();
    $categoria->id = $resultado['categoria_id'];

    $gasto = new Gasto();
    $gasto->id = $resultado['id'];
    $gasto->nome = $resultado['nome'];
    $gasto->descricao = $resultado['descricao'];
    $gasto->categoria = $categoria;
    $gasto->valor = $resultado['valor'];
    $gasto->pago = $resultado['pago'];

    return $resultado;
}