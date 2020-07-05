<?php

session_start();

$hostname = "localhost";
$bancodedados = "cadastrodepessoas";
$usuario = "root";
$senha = "MatheusQwerty123";

$mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);
if ($mysqli->connect_errno) {
    echo "Falha ao conectar: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
?>