<?php
session_start();
include "conexao.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = trim($_POST['email'] ?? '');
    $senha = trim($_POST['senha'] ?? '');

    if (empty($email) || empty($senha)) {
        die("Preencha todos os campos.");
    }

    $sql = $pdo->prepare("SELECT * FROM cadastro_usuario WHERE email_usuario = :email");
    $sql->bindParam(":email", $email);
    $sql->execute();
    $usuario = $sql->fetch(PDO::FETCH_ASSOC);

    if ($usuario && password_verify($senha, $usuario['senha_usuario'])) {
        $_SESSION['usuario_id'] = $usuario['id_usuario'];
        $_SESSION['usuario_nome'] = $usuario['nome_usuario'];
        header("Location: menudentrodologin.php");
        exit;
    } else {
        echo "Email ou senha incorretos.<br>";
        echo "<a href='login.php'>Voltar ao login</a>";
    }
} else {
    echo "Acesse pelo formulário de login.";
}

