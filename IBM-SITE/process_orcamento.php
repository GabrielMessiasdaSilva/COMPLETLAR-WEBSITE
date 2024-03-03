<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tipoTrabalho = $_POST["tipoTrabalho"];
    $cep = $_POST["cep"];
    $budget = $_POST["budget"];
    $ownership = $_POST["ownership"];
    $startDate = $_POST["startDate"];
    $additionalDetails = $_POST["additionalDetails"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $privacyPolicy = isset($_POST["privacyPolicy"]) ? 1 : 0;
    $receivePromotions = isset($_POST["receivePromotions"]) ? 1 : 0;

    try {
        // Conexão com o banco de dados usando PDO
        $conn = new PDO("mysql:host=localhost;dbname=completlar", "root", "");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Preparar a declaração SQL para inserir os dados na tabela
        $stmt = $conn->prepare("INSERT INTO orcamentos (tipoTrabalho, cep, budget, ownership, startDate, additionalDetails, name, email, phone, privacyPolicy, receivePromotions, status) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, 'Pendente')");

        $stmt->bindParam(1, $tipoTrabalho);
        $stmt->bindParam(2, $cep);
        $stmt->bindParam(3, $budget);
        $stmt->bindParam(4, $ownership);
        $stmt->bindParam(5, $startDate);
        $stmt->bindParam(6, $additionalDetails);
        $stmt->bindParam(7, $name);
        $stmt->bindParam(8, $email);
        $stmt->bindParam(9, $phone);
        $stmt->bindParam(10, $privacyPolicy);
        $stmt->bindParam(11, $receivePromotions);

        if ($stmt->execute()) {
            echo "Orçamento enviado com sucesso!";
            header("Location: orçamento.php");
        } else {
            echo "Erro ao enviar o orçamento.";
        }
    } catch (PDOException $e) {
        echo "Erro na conexão com o banco de dados: " . $e->getMessage();
    }

    $conn = null;
} else {
    // Redirecionar para a página de formulário se o método de solicitação não for POST
    header("Location: orçamento.php");
}
?>
