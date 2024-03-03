<?php
include_once 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['payButton'])) {
        if (isset($_POST['numero_cartao'])) {
            $numero_cartao = $_POST['numero_cartao'];
            // Processar o pagamento ou realizar outras ações necessárias com $numero_cartao

            echo "O pagamento com o cartão de crédito $numero_cartao foi processado com sucesso!";
            header('Location: cartao.html');
            exit();
        } else {
            echo "Erro: Número do cartão não foi recebido.";
        }
    } else {
        echo "O pagamento com o cartão de crédito foi processado com sucesso!";
       
    }
} else {
    echo "Erro: Método de requisição inválido.";
}
?>