<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/materialize/css/materialize.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../fonts/fontawesome/css/fontawesome.min.css">

    <title>CLIENTES</title>
</head>
    <nav>
        <ul><li><a href="../home.php"><i class="material-icons left">home</i>HOME</a></li></ul>
        <ul><li><a href="clientes.php"><i class="material-icons left">group</i>CLIENTES</a></li></ul>
    </nav>
    <div class="row container">
        <?php
            if(isset($_SESSION['msg'])){
                echo $_SESSION['msg'];
                session_unset();
            }

        ?>
        <form class="col s12" action="../BD/insert.php" method="post">

            <h3>Cadastro Cliente</h3>
            <div class="z-depth-5">
                <div class="input-field col s12">
                    <p><label for="nome">NOME</label></p>
                    <p><input type="text" name="nome" placeholder="Digite seu nome" required></p>
                </div>
                <div class="input-field col s12">
                    <p><label for="email">EMAIL</label><p>
                    <p><input type="email" name="email" placeholder="Digite seu email" required></p>
                </div>
                <div class="input-field col s12">
                    <p><label for="telefone">TELEFONE</label></p>
                    <p><input type="tel" name="telefone" placeholder="celular" required></p>
                </div>
                <div>
                    <button class="btn waves-effect waves-light" type="submit" name="btn-enviar" style="margin-left: 30px">ENVIAR</button>
                    <a class="btn waves-effect waves-light" href="clientes.php" style="margin-left: 10px">CANCELAR</a>
                </div>
                <br>
        </form>
    </div>

<?include_once '../inc/footer.php';