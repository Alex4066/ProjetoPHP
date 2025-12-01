<?php
include "conexao.php";

// Só executa quando o formulário for enviado
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $nome_prod      = $_POST["nome_prod"] ?? '';
    $cod_prod       = $_POST["cod_prod"] ?? '';
    $categoria_prod = $_POST["categoria_prod"] ?? '';
    $marca_prod     = $_POST["marca_prod"] ?? '';
    $modelo_prod    = $_POST["modelo_prod"] ?? '';

    // Verifica campos vazios
    if (empty($nome_prod) || empty($cod_prod) || empty($categoria_prod) || empty($marca_prod) || empty($modelo_prod)) {
        die("Preencha todos os campos.");
    }

    $sql = $pdo->prepare("
        INSERT INTO cadastro_produto 
        (nome_prod, cod_prod, categoria_prod, marca_prod, modelo_prod)
        VALUES (?, ?, ?, ?, ?)
    ");

    if ($sql->execute([$nome_prod, $cod_prod, $categoria_prod, $marca_prod, $modelo_prod])) {
        echo "Produto cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar produto.";
    }
}
?>