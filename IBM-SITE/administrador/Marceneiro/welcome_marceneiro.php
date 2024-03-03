<?php
session_start();

if (!isset($_SESSION["marceneiro_id"])) {
    header("Location: login_marceneiro.php"); // Redirecione para a página de login do marceneiro se não estiver autenticado
    exit;
}

// Conecte-se ao banco de dados e obtenha informações do marceneiro, se necessário

$marceneiro_id = $_SESSION["marceneiro_id"];

// Seu código de boas-vindas para marceneiro aqui
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Bem-vindo Marceneiro</title>
</head>
<body>
    <h1>Bem-vindo, Marceneiro!</h1>
    <p>Este é o conteúdo da página de boas-vindas para marceneiros. Somente marceneiros autenticados podem acessá-lo.</p>
    <a href="logout_marceneiro.php">Sair</a> 
    <a href="marceneiro.php">ver Orçamentos</a> <!-- Link para fazer logout do marceneiro -->
</body>
</html>
