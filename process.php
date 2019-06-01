<?php

$mysqli = new mysqli('localhost', 'root', '', 'vendas') or die(mysqli_error($mysqli));

if (isset($_POST['add-item'])){
    $cliente = $_POST['cliente'];
    $produto = $_POST['produto'];
    $valor = $_POST['valor'];
    $valor = removeMoeda($valor);
    
    
    $mysqli->query("INSERT INTO pedidos (cliente, produto, valor) VALUES('$cliente', '$produto', '$valor')") or die($mysqli->error);
    
    header("Location: index.php");
}

if (isset($_GET['delete'])){
    $id = $_GET['delete'];
    
    $mysqli->query("DELETE FROM pedidos WHERE id=$id") or die($mysqli->error);

    header("Location: index.php");
}

function removeMoeda($valor){
	$pontos = array(",", ".");
	$result = str_replace($pontos, "", $valor);
    if($result != ''){
        $result = $result / 100;
        $result = (string)$result;
    }
    /* codigo para conseguir gravar sem preencher valor.*/
    else{
        
        $result = '0';
    }
    /****************************************************/
    return $result;
}
?>