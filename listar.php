<?php

require_once "conexao.php";
$conexao = conectar();

$sql = "SELECT * FROM musica";
$resultado = executarSQL($conexao, $sql);
$musica = mysqli_fetch_all($resultado, MYSQLI_ASSOC);
echo json_encode($musica);