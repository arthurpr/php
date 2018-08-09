<?php

include_once 'conexao.php';

$dados = array();

$query = $conn->query("select * from tb_clientes");

//$query->execute();

while($row = $query->fetch_assoc()){
    array_push($dados, $row);
}

echo json_encode($dados);


header('location: ../paginas/clientes.php');
