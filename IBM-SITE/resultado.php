<?php
session_start();

if (isset($_SESSION['username'])) {
    include "includes/conexao.php";
    $pdo = new Conectar();
    $sql_orcamentos = "SELECT o.nome AS orcamento_nome, l.email AS orcamento_email, o.preco, o.status 
    FROM orcamentos o
    INNER JOIN loginclientes l ON o.id = l.id
    WHERE l.username = :username";

$stmt_orcamentos = $pdo->prepare($sql_orcamentos);
$stmt_orcamentos->bindParam(":username", $_SESSION['username']);
$stmt_orcamentos->execute();

$resultados = $stmt_orcamentos->fetchAll(PDO::FETCH_ASSOC);


} else {
    header("Location: index.php");
    exit;
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Obeservação de Orçamentos</title>
    <link lr rel="shortcut icon" href="assets/Imagens/Home/icons/logo.ico" type="image/x-icon" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <?php include "includes/header.php"; ?>
    
    <br><br>
    <div class="container text-center">
        <h1>Lista de Orçamentos</h1>
        <?php foreach ($resultados as $row): ?>
            <div class="accordion accordion-flush" style="margin-bottom: 10px;">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne" style="background-color: #03203a; color: #dee7e7;">
                            Detalhes do Orçamento
                        </button>
                    </h2>
                    <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample" style="background-color: #f8f9fa;">
                        <div class="accordion-body">
                            <strong>Nome de Marceneiro: </strong><?php echo htmlspecialchars($row['nome']); ?><br>
                            <strong>Email do Marceneiro: </strong><?php echo htmlspecialchars($row['email']); ?><br>
                            <strong>Preço Final: </strong><?php echo htmlspecialchars($row['preco']); ?><br>
                            <strong>Status: </strong><?php echo htmlspecialchars($row['status']); ?><br> <!-- Mostrando o status do orçamento -->
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

        <!-- Botão para limpar os orçamentos -->
        <form action="limpar_orcamentos.php" method="post">
            <button type="submit" class="btn btn-warning">Limpar Orçamentos</button>
        </form>
    </div>
<a href="MinhaConta.php">Voltar</a>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
