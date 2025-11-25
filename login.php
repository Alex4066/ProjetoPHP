<?php
include "cabecalho.php"; // Inclui o cabeçalho com a conexão ou o menu

include "conexao.php"; // Conexão com o banco de dados
session_start(); // Inicia a sessão

if (isset($_SESSION['usuario_id'])) {
    header("Location: inserirusuario.php"); // Se já estiver logado, redireciona
    exit;
}
?>

<div class="container">
    <h2>Login</h2>
    <form action="autenticar.php" method="POST">
        <div class="input-group">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>
        </div>
        <div class="input-group">
            <label for="senha">Senha:</label>
            <input type="password" name="senha" id="senha" required>
        </div>
        <div class="input-group">
            <button type="submit">Entrar</button>
        </div>
    </form>
    <a href="cadastroUsuario.php">Cadastrar novo usuário</a>
</div>
