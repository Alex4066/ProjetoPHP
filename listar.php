<?php
require "conexao.php";


try{
    $sql = $pdo-> prepare("SELECT * FROM cadastro_usuario;");
$sql -> execute();
$usuarios = $sql -> fetchAll(PDO::FETCH_ASSOC);

foreach ($usuarios as $usuario){

    echo "<br>";
    echo "Nome:" .$usuario["nome_usuario"] . "<br>";
    echo "Email:" .$usuario["email_usuario"] ;

}
} catch (PDOException $e){
    echo "ERRO AO LISTAR" . $e;
}

?>