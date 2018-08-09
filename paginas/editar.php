
<?php include_once '../BD/conexao.php';?>


<?php

    $id = $_GET['id'];

    $_SESSION['id'] = $id;

    $query = $conn->query("select * from tb_clientes where id = $id");

    while($row = $query->fetch_assoc()){

        $id = $row['id'];
        $nome = $row['nome'];
        $email = $row['email'];
        $telefone = $row['telefone'];
    }

?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../fonts/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="../css/materialize/css/materialize.css">
    <title>CLIENTES</title>
</head>
<body>
    <nav>
        <ul><li><a href="../home.php"><i class="material-icons left">home</i>HOME</a></li></ul>
        <ul><li><a href="clientes.php"><i class="material-icons left">group</i>CLIENTES</a></li></ul>
    </nav>

    <div class="row container">
        <form class="col s12" action="../BD/update.php" method="post">

            <input type="hidden" name="id">

            <h3>Editar Cliente</h3>
            <div class="z-depth-5">
                <div class="input-field col s12">
                    <p><label for="nome">NOME</label></p>
                    <p><input type="text" name="nome" value="<?php echo $nome?>"></p>
                </div>
                <div class="input-field col s12">
                    <p><label for="email">EMAIL</label></p>
                    <p><input type="email" name="email" value="<?php echo $email?>"></p>
                </div>
                <div class="input-field col s12">
                    <p><label for="telefone">TELEFONE</label></p>
                    <p><input type="tel" name="telefone" value="<?php echo $telefone?>"></p>
                </div>
                <div>
                    <p>
                        <button class="btn waves-effect waves-light" type="submit" name="btn-enviar" style="margin-left: 30px">SALVAR</button>
                        <a class="waves-effect waves-light btn" href="../paginas/clientes.php"style="margin-left: 10px">CANCELAR</a>
                    </p>
                </div>
                <br>
            </div>
        </form>
    </div>

<?include_once '../inc/footer.php';?>


