<?php 
session_start();

if (!isset($_SESSION['usuario_id'])) {
    header("Location: login.php");
    exit;
}

include "cabecalho.php"; 

?>

<div class="container">
    <h2>Cadastro de Produto</h2>

    <form action="inserirproduto.php" method="POST">
        <div class="input-group">
            <label>Nome:</label>
            <input type="text" name="nome_prod" required>
        </div>

        <div class="input-group">
            <label>Código:</label>
            <input type="text" name="cod_prod" required>
        </div>

        <div class="input-group">
            <label>Categoria:</label>
            <input type="text" name="categoria_prod" required>
        </div>

        <div class="input-group">
            <label>Marca:</label>
            <input type="text" name="marca_prod" required>
        </div>

        <div class="input-group">
            <label>Modelo:</label>
            <input type="text" name="modelo_prod" required>
        </div>

        <div class="input-group">
            <button type="submit">Cadastrar Produto</button>
            <a href="listarProdutos.php" class="btn-ver">Ver Produtos Cadastrados</a>
        </div>
        
    </form>
    <a href="login.php?logout=1" class="logout">Sair</a>
</div>

</body>
</html>
