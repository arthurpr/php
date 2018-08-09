<?php


include_once 'conexao.php';



if (isset($_GET['id'])){

    $id = intval($_GET['id']);

    $query = $conn->prepare("delete from tb_clientes where id = ?");

    $query->bind_param('i', $id);

    $query->execute();

    $rows = mysqli_affected_rows($conn);

    if ($rows > 0){
        //$_SESSION['msg'] = "<p> CADASTRO EFETUADO COM SUCESSO </p>"."<br>";
        $_SESSION['msg'] = "<script> alert('CADASTRO EXCLUIDO COM SUCESSO');</script>"."<br>";
    }
    else {
        $_SESSION['msg'] = "<script> alert('CADASTRO NAO EXCLUIDO');</script>" . "<br>";
    }

}






header('location: ../paginas/clientes.php');

