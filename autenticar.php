<?php
// Inicie a sessão para usar variáveis de sessão
session_start();

// Conexão com o banco de dados (certifique-se de que a variável $pdo esteja configurada corretamente)
include 'conexao.php'; // ou outro arquivo de conexão

// Receber os dados do formulário
$email = trim($_POST['email'] ?? '');
$senha = trim($_POST['senha'] ?? '');

// Verifique se os campos não estão vazios
if (empty($email) || empty($senha)) {
    $_SESSION['erro'] = "Preencha todos os campos";
    header ("Location: login.php");
    exit;
    //die("Preencha todos os campos.<br><a href='login.php'>Voltar</a>");
}

try {
    // Prepare a consulta para buscar o usuário pelo e-mail
    $sql = $pdo->prepare("SELECT * FROM cadastro_usuario WHERE email_usuario = :email");
    $sql->bindParam(":email", $email);
    $sql->execute();

    // Busque os dados do usuário
    $usuario = $sql->fetch(PDO::FETCH_ASSOC);

    // Verifique se o usuário foi encontrado e se a senha está correta
    if ($usuario && password_verify($senha, $usuario['senha_usuario'])) {
        // Inicie a sessão e armazene as informações do usuário
        $_SESSION['usuario_id'] = $usuario['id_usuario'];
        $_SESSION['usuario_nome'] = $usuario['nome_usuario'];

        // Redirecione para a página de sucesso ou área protegida
        header("Location: cadastroProduto.php");
        exit;  // Certifique-se de chamar exit após header() para interromper a execução do script
    } else {
        // Caso o e-mail ou senha estejam incorretos
        //echo "Email ou senha incorretos.<br>";
        //echo "<a href='login.php'>Voltar ao login</a>";
        $_SESSION['erro'] = "email ou senha incorretos";
        header("Location: login.php");
        exit;
    }

} catch (PDOException $e) {
    die("Erro ao acessar o banco de dados: " . $e->getMessage());
}

?>