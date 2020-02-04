<?php

if(count($_POST) > 0) {
    $dados = $_POST;
    $erros = [];

    if(trim($dados['nome']) === "") {
        $erros['nome'] = 'Nome é obrigatório';
    }

    if(!count($erros)) {
        require_once "conexao.php";

        $sql = "INSERT INTO cadastro 
        (nome)
        VALUES (?)";

        $conexao = novaConexao();
        $stmt = $conexao->prepare($sql);

        $params = [
            $dados['nome']
        ];

        $stmt->bind_param("s", ...$params);

        if($stmt->execute()) {
            unset($dados);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Adicionar Usuário</title>
</head>

<body>
<?php 
    require_once "../cabecalho.php"
?>
    <br>
    <div class="barra-voltar">
        <div class="row">
            <div class="col">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="../menu-admin.php">Menu Administrativo</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Adicionar Usuário</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <br>

    <div class="jumbotron">
        <h1>Cadastro de Usuário</h1>
        <form method="post" action="">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="">Nome Completo</label>
                        <input type="text" class="form-control" name="nome" placeholder="Seu nome">
                    </div>
                    <?php echo $nome ?>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>