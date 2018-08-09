<?php

include_once 'conexao.php';


//$nome = isset($_POST['nome'] ? $_POST['nome'] : "");
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_NUMBER_INT);


$query = $conn->prepare("insert into tb_clientes (nome, email, telefone) 
                         values (?, ?, ?)");

$query->bind_param("sss", $nome, $email , $telefone);

$query->execute();

$rows = mysqli_affected_rows($conn);

if ($rows > 0){
    //$_SESSION['msg'] = "<p> CADASTRO EFETUADO COM SUCESSO </p>"."<br>";
    $_SESSION['msg'] = "<script> alert('CADASTRO EFETUADO COM SUCESSO');</script>"."<br>";
}else{
    $_SESSION['msg'] = "<script> alert('CADASTRO NAO EFETUADO');</script>"."<br>";
}

header('location: ../paginas/clientes.php');