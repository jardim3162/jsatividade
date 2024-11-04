<?php
function conectar(): mysqli
{
    $conexao = mysqli_connect(
        hostname: "localhost",
        username: "root",
        password: "",
        database: "script_jg"
    );
    if ($conexao === false) {
        echo "Erro ao conectar à base dados. Nº do erro: " .
            mysqli_connect_errno() . ". " .
            mysqli_connect_error();
        die();
    }
    return $conexao;
}

function executarSQL($conexao, $sql): mysqli_result
{
    $resultado = mysqli_query(mysql: $conexao, query: $sql);
    if ($resultado === false) {
        echo "Erro ao executar o comando SQL. " .
            mysqli_errno(mysql: $conexao) . ": " . mysqli_error(mysql: $conexao);
        die();
    }
    return $resultado;
}