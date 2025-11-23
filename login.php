<?php
session_start();
if (isset($_SESSION['usuario_id'])) {
    header("Location: menudentrodologin.php");
    exit;
}
?>

<h2>Login</h2>
<form action="autenticar.php" method="POST">
    Email: <input type="email" name="email" required><br>
    Senha: <input type="password" name="senha" required><br>
    <button type="submit">Entrar</button>
</form>
<a href="cadastro_usuario.php">Cadastrar novo usuário</a>

