<?php

$id_titulo = $_GET['id_titulo'];

require_once "conexao.php";
$conexao = conectar();

$sql = "SELECT * FROM musica 
        WHERE id_titulo = $id_titulo";
$resultado = executarSQL($conexao, $sql);
$musica = mysqli_fetch_assoc($resultado);
echo json_encode($musica);