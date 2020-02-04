<?php

function novaConexao($banco = 'bd_academia'){
    $servidor = '127.0.0.1:3310';
    $usuario = 'root';
    $senha = 'root';

    $conexao = new mysqli($servidor, $usuario, $senha, $banco);

    if ($conexao->connect_error) {
        die("Erro: " . $conexao->connect_error);
    }
    return $conexao;
}

?>