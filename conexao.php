<?php
$host = "localhost";
$dbname = "sistema";
$user = "root";
$pass = "root";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $pass);
 
} catch (PDOException $e) {
    die("Erro ao se conectar: " . $e->getMessage());
}
?>


