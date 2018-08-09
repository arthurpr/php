<?php

include_once 'conexao.php';

session_start();

$id = $_SESSION['id'];

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_NUMBER_INT);


$query = $conn->query("update tb_clientes 
                       set nome = '$nome', email = '$email', telefone = '$telefone' 
                       where id = '$id'") or die("ERRO AO ATUALIZAR");

$rows = mysqli_affected_rows($conn);

if ($rows > 0){
    $_SESSION['msg'] = "<p><h5 style='color: #00C853'> CADASTRO ALTERADO COM SUCESSO </h5></p>"."<br>";
    //$_SESSION['msg'] = "<script> alert('CADASTRO ALTERADO COM SUCESSO');</script>"."<br>";
}else {
    $_SESSION['msg'] = "<script> alert('CADASTRO NAO FOI ALTERADO');</script>" . "<br>";
}
header('location: ../paginas/clientes.php');





