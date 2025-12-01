<?php
session_start();

// Logout
if (isset($_GET['logout'])) {
    session_unset();
    session_destroy();
}

// Se já estiver logado, vai para o cadastro de produto
if (isset($_SESSION['usuario_id'])) {
    header("Location: cadastroProduto.php");
    exit;
}

include "conexao.php";
include "cabecalho.php";
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

