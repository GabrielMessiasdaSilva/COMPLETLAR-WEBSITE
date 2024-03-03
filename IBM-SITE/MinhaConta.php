<?php
session_start();

// Certifique-se de que o usuário esteja logado
if (isset($_SESSION['username'])) {
    // Conecte-se ao banco de dados
    include "includes/conexao.php";
    $pdo = new Conectar();

    // Selecione as informações do usuário
    $sql = "SELECT username, email, cep, telefone FROM loginclientes WHERE username = :username";

    if ($stmt = $pdo->prepare($sql)) {
        $stmt->bindParam(":username", $param_username, PDO::PARAM_STR);
        $param_username = $_SESSION['username'];

        if ($stmt->execute()) {
            if ($stmt->rowCount() == 1) {
                $row = $stmt->fetch();
                $username = $row['username'];
                $email = $row['email'];
                $cep = $row['cep'];
                $telefone = $row['telefone'];
            }
        }

        unset($stmt);
    }

    unset($pdo);
} else {
    // Se o usuário não estiver logado, redirecione para a página de login
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Conta</title>
    <!-- Adicione os links para o Bootstrap CSS e Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <!-- Adicione o CSS do projeto -->
    <link rel="stylesheet" href="assets/CSS/minhaConta.css" />
</head>

<body>

    <!-- NAVBAR -->
    <?php include 'includes/header.php'; ?>

    <div class="container mt-5">
        <h1>Minha Conta</h1>

        <p>
            <strong>Nome de Usuário:</strong> <?php echo htmlspecialchars($username); ?><br>
            <strong>Email:</strong> <?php echo htmlspecialchars($email); ?><br>
            <strong>CEP:</strong> <?php echo htmlspecialchars($cep); ?><br>
            <strong>Telefone:</strong> <?php echo htmlspecialchars($telefone); ?><br>
        </p>

        <p>
            <a href="atualizar_informacoes.php" class="btn btn-warning">Atualize suas Informações</a>
            <a href="logout.php" class="btn btn-danger ml-3">Sair da conta</a>
        </p>

        <div class="mt-5">
            <h2>Orçamentos</h2>
            <!-- Adjusted form for observing the budget -->
            <form action="resultado.php" method="post">
                <button type="submit" class="btn btn-success" name="aprovar">Observar Orçamento</button>
            </form>
        </div>
    </div>

    <!-- Adicione os links para o Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>