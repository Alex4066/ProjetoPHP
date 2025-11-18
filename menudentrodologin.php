  <?php
include "conexao.php";
$nome = "$nome"; 
$email = "$email";
$senha = "$senha";
$sql = $pdo->prepare("INSERT INTO cadastro_usuario (nome_usuario, email_usuario, senha_usuario) VALUES (:nome, :email, :senha)"); 
$sql ->bindParam (":nome", $nome);
$sql ->bindParam(":email", $email);
$sql ->bindParam(":senha", $senha);
$sql->execute();
 echo "Registro inserido com sucesso!";

 ?>
<form action="acoes.php" method="POST">
    <button type="submit" name="acao" value="inserir">Cadastro</button>

</form>


  