<?php

require_once "conexao.php";
$conexao = conectar();

$musica = json_decode(file_get_contents("php://input"));
$sql = "UPDATE musica SET
        titulo='$musica->titulo',
        artista='$musica->artista', 
        genero='$musica->genero', 
        ano='$musica->ano'
        WHERE id_titulo=$musica->id_titulo";

executarSQL($conexao, $sql);

echo json_encode($musica);