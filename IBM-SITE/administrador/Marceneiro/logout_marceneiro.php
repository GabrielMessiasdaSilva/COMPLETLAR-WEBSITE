<?php
session_start();

// Encerre a sessão para fazer logout
session_unset();
session_destroy();

header("Location: login_marceneiro.php"); // Redirecione de volta para a página de login do marceneiro
exit;
?>
