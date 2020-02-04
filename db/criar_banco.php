<h1>Criar BD</h1>
<?php

require_once "conexao.php";

$conexao = novaConexao(null);
$sql = "CREATE DATABASE bd_academia";

$conexao->query($sql);

$conexao = novaConexao();
$resultado = $conexao->query($sql);

if ($resultado) {
    echo "Sucesso!";
}else{
    echo "Erro: " . $conexao->error;
}
$conexao->close();

?>