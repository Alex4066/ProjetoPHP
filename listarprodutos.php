<?php
session_start();

if (!isset($_SESSION['usuario_id'])) {
    header("Location: login.php");
    exit;
}

include "conexao.php";
include "cabecalho.php";

$query = $pdo->query("SELECT * FROM cadastro_produto ORDER BY id_prod DESC");
$produtos = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<h2>Produtos Cadastrados</h2>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Código</th>
        <th>Categoria</th>
        <th>Marca</th>
        <th>Modelo</th>
    </tr>

    <?php 

    foreach ($produtos as $prod): 

    ?>
    <tr>
        <td><?= $prod['id_prod'] ?></td>
        <td><?= $prod['nome_prod'] ?></td>
        <td><?= $prod['cod_prod'] ?></td>
        <td><?= $prod['categoria_prod'] ?></td>
        <td><?= $prod['marca_prod'] ?></td>
        <td><?= $prod['modelo_prod'] ?></td>
    </tr>
<?php 

endforeach; 

?>
</table>

<a href="cadastroProduto.php" class="btn-ver">Voltar</a>

