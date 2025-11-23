<?php
include "conexao.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome  = trim($_POST['nome'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $senha = trim($_POST['senha'] ?? '');

    if (empty($nome) || empty($email) || empty($senha)) {
        die("Preencha todos os campos.");
    }

    $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

    $sql = $pdo->prepare("
        INSERT INTO cadastro_usuario (nome_usuario, email_usuario, senha_usuario)
        VALUES (:nome, :email, :senha)
    ");
    $sql->bindParam(":nome", $nome);
    $sql->bindParam(":email", $email);
    $sql->bindParam(":senha", $senhaHash);

    if ($sql->execute()) {
        echo "Usuário cadastrado com sucesso!<br>";
        echo "<a href='login.php'>Ir para login</a>";
        exit;
    } else {
        echo "Erro ao cadastrar usuário.";
    }
}
?>

<h2>Cadastrar Usuário</h2>
<form action="" method="POST">
    Nome: <input type="text" name="nome" required><br>
    Email: <input type="email" name="email" required><br>
    Senha: <input type="password" name="senha" required><br>
    <button type="submit">Cadastrar</button>
</form>
<a href="login.php">Já possui conta? Faça login</a>

