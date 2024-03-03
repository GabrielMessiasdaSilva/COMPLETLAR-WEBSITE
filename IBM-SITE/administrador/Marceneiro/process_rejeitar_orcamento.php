<?php
// Verifique se o número foi enviado pelo formulário
if (isset($_POST['status'])) {
    // Recupere o número enviado pelo formulário
    $numero = $_POST['status'];
    echo "Seu Orçamento foi: " . $numero;
} else {
    echo "Problema no orçamento.";
}
?>
