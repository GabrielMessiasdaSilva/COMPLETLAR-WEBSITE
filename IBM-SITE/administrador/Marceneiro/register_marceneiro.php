<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["username"]) && isset($_POST["password"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Crie um hash seguro da senha
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Conecte-se ao banco de dados (substitua com suas próprias credenciais)
    $db = new PDO('mysql:host=localhost;dbname=completlar', 'root', '');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Insira o novo marceneiro no banco de dados
    $query = "INSERT INTO marceneiros (username, password) VALUES (:username, :password)";
    $stmt = $db->prepare($query);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $hashed_password);

    if ($stmt->execute()) {
        echo "Marceneiro registrado com sucesso!";
    } else {
        echo "Erro ao registrar o marceneiro.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Registro de Marceneiro</title>
</head>
<body>
    <h1>Registro de Marceneiro</h1>
    <form method="post" action="register_marceneiro.php">
        <label for="username">Nome de Usuário:</label>
        <input type="text" name="username" required><br>

        <label for="password">Senha:</label>
        <input type="password" name="password" required><br>

        <button type="submit">Registrar</button>
    </form>
</body>
</html>
