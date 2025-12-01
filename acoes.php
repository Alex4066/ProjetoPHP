<?php

if (!isset($_POST["acao"])) {
    die("Nenhuma ação enviada.");
}

$acao = $_POST["acao"];

switch ($acao) {

    case "inserir":
        header("Location: cadastroProduto.php");
        exit;

    case "listar":
        header("Location: listar_produtos.php");
        exit;

    case "adicionar":
        header("Location: cadastro_produto.php");
        exit;

    case "alterar":
        header("Location: alterar_produto.php");
        exit;

    case "deletar":
        header("Location: deletar_produto.php");
        exit;

    default:
        echo "Ação inválida!";
        break;
}
?>
