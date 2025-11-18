<?php

$host = "localhost";
$dbname = "sistema";
$user = "root";
$pass = "root";

try {
    $pdo = new PDO("mysql:host=$host;dbname=sistema;charset=utf8",$user,$pass);
    echo "Conexao realizada com sucesso!<br>";
    }catch(PDOException $e){
        echo "Erro ao se conectar:".$e->getMessage();
    }