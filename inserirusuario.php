<?php
include "conexao.php";
 
if ($_SERVER["REQUEST_METHOD"] === "POST") {
 
    $nome  = trim($_POST["nome"] ?? '');
    $email = trim($_POST["email"] ?? '');
    $senha = $_POST["senha"] ?? '';
 
    if (empty($nome) || empty($email) || empty($senha)) {
        die("Preencha todos os campos.");
    }
 
    // Criptografa a senha
    //$senhaHash = password_hash($senha, PASSWORD_DEFAULT);
 
    try {
        $sql = $pdo->prepare("INSERT INTO cadastro_usuario (nome_usuario, email_usuario, senha_usuario) VALUES (:nome, :email, :senha);");
 
        $sql->bindParam(":nome", $nome);
        $sql->bindParam(":email", $email);
        $sql->bindParam(":senha", $senha);
 
        $sql->execute();
 
        echo "Cadastro realizado com sucesso!<br>";
        echo "<a href='index.php'>Voltar ao menu</a>";
 
    } catch (PDOException $e) {
        die("Erro ao cadastrar usuário: " . $e->getMessage());
    }
}
?>
 