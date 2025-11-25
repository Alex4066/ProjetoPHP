<?php include "cabecalho.php" ?>

    <div class="container">
        <h2>Cadastro de Usuário</h2>
        <form action="inserirusuario.php" method="POST">
            <div class="input-group">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" required>
            </div>
            <div class="input-group">
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="input-group">
                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" required>
            </div>
            <div class="input-group">
                <input type="submit" value="Cadastrar">
            </div>
        </form>
        <div class="message">
            <p>Já tem uma conta? <a href="login.php">Faça login</a></p>
        </div>
    </div>

</body>
</html>
