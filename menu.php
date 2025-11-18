<?php
include "conexao.php";
$nome_prod = "$nome_prod"; 
$cod_prod = "$cod_prod";
$categoria_prod = "$categoria_prod";
$marca_prod = "$marca_prod";
$modelo_prod = "$modelo_prod";
$sql = $pdo->prepare("INSERT INTO cadastro_produto (nome_prod, cod_prod, categoria_prod, marca_prod, modelo_prod) VALUES (?, ?, ?, ?, ?)"); 
$sql->execute([$nome_prod, $cod_prod, $categoria_prod, $marca_prod, $modelo_prod]); echo "Registro inserido com sucesso!"; 

?>



<form action="acoes.php" method="POST">
  <button type="submit" name="acao" value="listar"></button>
    <button type="submit" name="acao" value="alterar">Alterar Cadastro</button>
    <button type="submit" name="acao" value="deletar">Deletar Aluno</button>
    </form>