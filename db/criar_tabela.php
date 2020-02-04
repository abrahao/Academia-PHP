<h1>Criar Tabela</h1>

<?php

require_once "conexao.php";
$sql = "CREATE TABLE IF NOT EXISTS cadastro (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(50) NOT NULL)";

$conexao = novaConexao();
$resultado = $conexao->query($sql);

if ($resultado) {
    echo "Sucesso!";
}else{
    echo "Erro: " . $conexao->error;
}
$conexao->close();