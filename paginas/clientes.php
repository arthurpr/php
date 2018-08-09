<?php

include_once '../BD/conexao.php';


//$dados = array();

$query = $conn->query("select * from tb_clientes");

//$query->execute();



?>

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
<body>
    <nav>
        <ul><li><a href="../home.php"><i class="material-icons left">home</i>HOME</a></li></ul>
        <ul><li><a href="cliente.php"><i class="material-icons left">group_add</i>CADASTRAR</a></li></ul>
    </nav>

    <input type="hidden" name="id" value="<?php $id ?>">

    <?php

        if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            session_unset();
        }

    ?>

    <div class="row container">
        <h3>CLIENTES</h3>
        <div class="z-depth-5">
            <table class="striped" style="box-sizing: border-box">
                <thead class="col-head">
                <tr>
                    <th class="id-table">ID</th>
                    <th>NOME</th>
                    <th>EMAIL</th>
                    <th>TELEFONE</th>
                    <th></th>
                </tr>
                </thead>
                <tbody class="col-body">
                <?php while($row = $query->fetch_assoc()):?>
                    <tr>
                        <td><?= $row['id'] ?></td>
                        <td><?= $row['nome'] ?></td>
                        <td><?= $row['email'] ?></td>
                        <td><?= $row['telefone'] ?></td>
                        <td>
                            <a href="editar.php?id=<?= $row['id'] ?>"><i class="material-icons" title="Editar">edit</i></a>
                            <a href="../BD/excluir.php?id=<?= $row['id'] ?>"><i class="material-icons" title="Excluir">delete</i></a>
                        </td>
                    </tr>
                <?php endwhile; ?>
                </tbody>
                <tfoot>

                </tfoot>
            </table>

        </div>

    </div>

<?include_once '../inc/footer.php';