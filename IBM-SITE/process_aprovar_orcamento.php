<?php 
if (isset($_POST['aprovar']) && isset($_POST['orcamento_id'])) {
    $orcamento_id = $_POST['orcamento_id'];

    // Atualize o status do pedido para "Aprovado"
    $sql = "UPDATE orcamentos SET status = 'Aprovado' WHERE id = :orcamento_id";
    
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':orcamento_id', $orcamento_id, PDO::PARAM_INT);

    if ($stmt->execute()) {
        // Pedido aprovado com sucesso
        header("Location: minha_conta.php?message=Pedido%20aprovado%20com%20sucesso");
        exit;
    } else {
        // Ocorreu um erro ao atualizar o pedido
        header("Location: minha_conta.php?message=Erro%20ao%20atualizar%20o%20pedido");
        exit;
    }
}
?>