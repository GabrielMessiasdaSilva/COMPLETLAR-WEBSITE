<?php
session_start();

if (isset($_POST['add_to_cart'])) {
    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];

    // Crie ou atualize a variável de sessão para o carrinho
    if (isset($_SESSION['carrinho'][$product_id])) {
        $_SESSION['carrinho'][$product_id]['quantidade']++;
    } else {
        $_SESSION['carrinho'][$product_id] = [
            'nome' => $product_name,
            'preco' => $product_price,
            'quantidade' => 1,
        ];
    }
}

// Redirecione de volta para a página de produtos após adicionar ao carrinho
header('Location: produtos.php');
