    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./Academia-PHP/style.css">
    <title>Excluir Registro</title>


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

    <?php
    require_once "conexao.php";

    $registros = [];
    $conexao = novaConexao();

    if ($_GET['excluir']) {
        $excluirSQL = "DELETE FROM cadastro WHERE id = ?";
        $stmt = $conexao->prepare($excluirSQL);
        $stmt->bind_param("i", $_GET['excluir']);
        $stmt->execute();
    }

    $sql = "SELECT id, nome FROM cadastro";
    $resultado = $conexao->query($sql);
    if ($resultado->num_rows > 0) {
        while ($row = $resultado->fetch_assoc()) {
            $registros[] = $row;
        }
    } elseif ($conexao->error) {
        echo "Erro: " . $conexao->error;
    }

    $conexao->close;
    ?>

    <table class="table table-hover table-striped table-bordered">
        <thead>
            <th>ID</th>
            <th>Nome</th>
            <th>Ações</th>
        </thead>
        <tbody>
            <?php foreach ($registros as $registro) : ?>
                <tr>
                    <td><?= $registro['id'] ?></td>
                    <td><?= $registro['nome'] ?></td>
                    <td>
                    <a href="excluir_usuario=<?= $registro['id'] ?>" 
                        class="btn btn-danger">
                        Excluir
                    </a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>

    <style>
        table>* {
            font-size: 1.2rem;
        }
    </style>