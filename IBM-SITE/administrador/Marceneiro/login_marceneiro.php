<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["username"]) && isset($_POST["password"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Conecte-se ao banco de dados (substitua com suas próprias credenciais)
    $db = new PDO('mysql:host=localhost;dbname=completlar', 'root', '');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Consulta para obter o hash da senha
    $query = "SELECT id, username, password FROM marceneiros WHERE username = :username";
    $stmt = $db->prepare($query);
    $stmt->bindParam(':username', $username);
    $stmt->execute();
    $marceneiro = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($marceneiro && password_verify($password, $marceneiro["password"])) {
        // A senha é válida, permita o acesso
        $_SESSION["marceneiro_id"] = $marceneiro["id"];
        header("Location: welcome_marceneiro.php"); // Redirecione para a página de boas-vindas do marceneiro
        exit;
    } else {
        $error_message = "Credenciais inválidas. Tente novamente.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login de Marceneiro</title>
</head>
<body>
    <h1>Login de Marceneiro</h1>
    <?php if (isset($error_message)) { echo "<p>$error_message</p>"; } ?>
    <form method="post" action="login_marceneiro.php">
        <label for="username">Nome de Usuário:</label>
        <input type="text" name="username" required><br>

        <label for="password">Senha:</label>
        <input type="password" name="password" required><br>

        <button type="submit">Login</button>
    </form>
</body>
</html>
