<?php

$usuario = 'root';
$senha = '';
$database = 'login';
$host = 'localhost';

$mysqli = new mysqli($host, $username, $senha, $database);

if($mysqli -> error) {
   die("Falha ao conectar ao banco de dados: " . $mysqli -> error);
}