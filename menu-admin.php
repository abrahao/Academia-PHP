<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Administrativo</title>
</head>

<body>

<?php
require_once "cabecalho.php"
?>

    <br>
    <div class="barra-voltar">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="./index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Menu Administrativo</li>
            </ol>
        </nav>
    </div>
    <br>
    <div class="">
        <div class="container">
            <div class="row">
                <div class="col">
                    <a href="./db/adicionar-usuario.php"><img src="./assets/add-user.jpg" alt="" width=100 height=100>
                    </a>
                    <br> Adicionar Usuário
                </div>
                <div class="col">
                    <a href="/db/consultar.php"><img src="./assets/query.png" alt="" width=100 height=100></a>
                    <br> Consultar Usuário
                </div>
                <div class="col">
                    <a href="/db/excluir_usuario.php"><img src="./assets/remover-user.png" alt="" width=100 height=100></a>
                    <br> Excluir Usuário
                </div>
            </div>
        </div>
    </div>
</body>

</html>