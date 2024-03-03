<?php
session_start();

// Destrua a sessão
session_destroy();

// Destrua o cookie
setcookie('autenticado', '', time() - 3600, '/');

// Redirecionar para a página de login
header("Location: login.php");
exit();
?>
