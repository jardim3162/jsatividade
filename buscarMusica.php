<?php

$id_titulo = $_GET['id_titulo'];

require_once "conexao.php";
$conexao = conectar();

$sql = "SELECT id_titulo, titulo, artista, genero, ano FROM musica 
        WHERE id_musica = $id_musica";
$resultado = executarSQL($conexao, $sql);
$musica = mysqli_fetch_assoc($resultado);
echo json_encode($musica);