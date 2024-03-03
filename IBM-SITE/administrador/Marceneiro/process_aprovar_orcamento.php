<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $orcamento_id = $_POST["orcamento_id"];
    $status = $_POST["status"];
    $price = $_POST["price"];

    try {
        // Conexão com o banco de dados usando PDO
        $conn = new PDO("mysql:host=localhost;dbname=completlar", "root", "     ");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Atualize o status e adicione o preço ao orçamento
        $stmt = $conn->prepare("UPDATE orcamentos SET status = :status, preco = :preco WHERE id = :orcamento_id");
        $stmt->bindParam(':status', $status);
        $stmt->bindParam(':preco', $price);
        $stmt->bindParam(':orcamento_id', $orcamento_id);

        if ($stmt->execute()) {
            echo "Orçamento atualizado com sucesso!";
            header("Location: marceneiro.php");
            exit();
        } else {
            echo "Erro ao atualizar o orçamento.";
        }
    } catch (PDOException $e) {
        echo "Erro ao conectar ao banco de dados: " . $e->getMessage();
    }

    $conn = null;
}
?>
