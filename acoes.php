<?php
 
    $acao = $_POST["acao"];

    switch ($acao) {
        case "inserir":
            header("Location: cadastro.php");
            exit;
        default:
            echo "Ação inválida!";
            break;
    }


?>