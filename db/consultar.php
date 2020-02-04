<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="./Academia-PHP/style.css">
    <title>Administrativo</title>
</head>

<body>
    <?php
    require_once "conexao.php";

    $sql = "SELECT id, nome FROM cadastro";

    $conexao = novaConexao();
    $resultado = $conexao->query($sql);

    $registros = [];

    if ($resultado->num_rows > 0) {
        while ($row = $resultado->fetch_assoc()) {
            $registros[] = $row;
        }
    } elseif ($conexao->error) {
        echo "Erro: " . $conexao->error;
    }

    $conexao->close();
    ?>
    <br>
    <div class="barra-voltar">
        <div class="row">
            <div class="col">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="../menu-admin.php">Menu Administrativo</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Consultar Usuário</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <br>

    <div class="jumbotron">
        <table class="table table-hover table-striped table-bordered">
            <thead>
                <th>Código</th>
                <th>Nome</th>
            </thead>
            <tbody>
                <?php foreach ($registros as $registro) : ?>
                    <tr>
                        <td><?= $registro['id'] ?></td>
                        <td><?= $registro['nome'] ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>

        <style>
            table>* {
                font-size: 1.2rem;
            }
        </style>
    </div>
</html>