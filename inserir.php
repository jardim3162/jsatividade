<?php

require_once "conexao.php";
$conexao = conectar();

$musica = json_decode(file_get_contents("php://input"));
$sql = "INSERT INTO musica
        (titulo, artista, genero, ano)
        VALUES 
        ('$musica->titulo', 
        '$musica->artista',
        '$musica->genero', 
        '$musica->ano')";

executarSQL(conexao: $conexao, sql: $sql);

$musica->id_titulo= mysqli_insert_id(mysql: $conexao);
echo json_encode(value: $musica);