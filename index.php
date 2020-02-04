<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        body {
            background-image: url('assets/background.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Academia</title>
</head>

<body>

<?php
require_once "cabecalho.php" 
?>

    <br>
    <div class="">
        <div class="container">
            <div class="row">
                <div class="col">
                    <a href="menu-admin.php">
                        <button type="button" class="administrativo">Administrativo</button>
                    </a>

                </div>
                <div class="col">
                    <a href="menu-financeiro.php">
                        <button type="button" class="financeiro">Financeiro</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>