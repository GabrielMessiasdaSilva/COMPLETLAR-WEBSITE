<?php
session_start();

if (isset($_GET['produto_id'])) {
    $product_id = $_GET['produto_id'];

    // Verifique se o produto está no carrinho
    if (isset($_SESSION['carrinho'][$product_id])) {
        // Remova o produto do carrinho
        unset($_SESSION['carrinho'][$product_id]);
    }
}

// Redirecione de volta para o carrinho
header('Location: carrinho.php');
exit;
?>
