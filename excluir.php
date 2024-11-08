<?php

$id_titulo= $_GET['id_titulo'];

require_once "conexao.php";
$conexao = conectar();
$sql = "DELETE FROM musica WHERE id_titulo = $id_titulo";
$retorno = executarSQL($conexao, $sql);
echo json_encode($retorno);