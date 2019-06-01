<?php

$mysqli = new mysqli('localhost', 'root', '', 'vendas') or die(mysqli_error($mysqli));

if (isset($_POST['add-item'])){
    $cliente = $_POST['cliente'];
    $produto = $_POST['produto'];
    $valor = $_POST['valor'];
    $valor = tiraMoeda($valor);
    
    $mysqli->query("INSERT INTO pedidos (cliente, produto, valor) VALUES('$cliente', '$produto', '$valor')") or die($mysqli->error);
}

if (isset($_GET['delete'])){
    $id = $_GET['delete'];
    
    $mysqli->query("DELETE FROM pedidos WHERE id=$id") or die($mysqli->error);
}

function tiraMoeda($valor){
	$pontos = array(",", ".");
	$result = str_replace($pontos, "", $valor);
    $result = $result / 100;
	return $result;
}

?>