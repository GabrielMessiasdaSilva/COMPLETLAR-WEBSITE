<?php
session_start();

if (isset($_SESSION['username'])) {
    include "includes/conexao.php";
    $pdo = new Conectar();

    $username = $email = $cep = $telefone = '';
    $error_message = '';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $novo_email = $_POST['novo_email'];
        $novo_cep = $_POST['novo_cep'];
        $novo_telefone = $_POST['novo_telefone'];
        $current_password = $_POST['current_password'];
        $new_password = $_POST['new_password'];
        $confirm_password = $_POST['confirm_password'];

        // Atualização dos detalhes do usuário
        $sql = "UPDATE loginclientes SET email = :novo_email, cep = :novo_cep, telefone = :novo_telefone WHERE username = :username";

        if ($stmt = $pdo->prepare($sql)) {
            $stmt->bindParam(":novo_email", $novo_email, PDO::PARAM_STR);
            $stmt->bindParam(":novo_cep", $novo_cep, PDO::PARAM_STR);
            $stmt->bindParam(":novo_telefone", $novo_telefone, PDO::PARAM_STR);
            $stmt->bindParam(":username", $_SESSION['username'], PDO::PARAM_STR);

            if ($stmt->execute()) {
                // Atualização bem-sucedida, recarrega os dados do usuário
                $sql = "SELECT username, email, cep, telefone FROM loginclientes WHERE username = :username";
                if ($stmt = $pdo->prepare($sql)) {
                    $stmt->bindParam(":username", $_SESSION['username'], PDO::PARAM_STR);

                    if ($stmt->execute()) {
                        if ($stmt->rowCount() == 1) {
                            $row = $stmt->fetch();
                            $username = $row['username'];
                            $email = $row['email'];
                            $cep = $row['cep'];
                            $telefone = $row['telefone'];
                        }
                    }
                }
            }
        }

        function verifyPassword($username, $password) {
            include "includes/conexao.php";
            $pdo = new Conectar();

            $sql = "SELECT password FROM loginclientes WHERE username = :username";
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(":username", $username, PDO::PARAM_STR);
            $stmt->execute();
            
            if ($stmt->rowCount() === 1) {
                $row = $stmt->fetch();
                $hashed_password = $row['password'];
                
                // Verificação básica da senha (não recomendada para produção)
                // NÃO USE dessa forma em um ambiente de produção - utilize funções seguras de hash como password_verify()

                if ($hashed_password === $password) {
                    return true;
                }
            }
            return false;
        }

        // Alteração de senha
        if (!empty($current_password) && !empty($new_password) && !empty($confirm_password)) {
            if (verifyPassword($_SESSION['username'], $current_password)) {
                if ($new_password === $confirm_password) {
                    // Valide a nova senha, por exemplo, comprimento mínimo, complexidade
                    // ... adicione sua lógica de validação aqui

                    // Criptografe a nova senha
                    $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);

                    // Atualize a senha no banco de dados
                    $sql = "UPDATE loginclientes SET password = :hashed_password WHERE username = :username";

                    if ($stmt = $pdo->prepare($sql)) {
                        $stmt->bindParam(":hashed_password", $hashed_password, PDO::PARAM_STR);
                        $stmt->bindParam(":username", $_SESSION['username'], PDO::PARAM_STR);

                        if ($stmt->execute()) {
                            // Senha atualizada com sucesso
                            // ... adicione uma mensagem de sucesso ou redirecione para uma página de sucesso
                        }
                    }
                } else {
                    $error_message = "As novas senhas não coincidem!";
                }
            } else {
                $error_message = "A senha atual está incorreta!";
            }
        }
    } else {
        // Carregar as informações do usuário
        $sql = "SELECT username, email, cep, telefone FROM loginclientes WHERE username = :username";
        if ($stmt = $pdo->prepare($sql)) {
            $stmt->bindParam(":username", $_SESSION['username'], PDO::PARAM_STR);

            if ($stmt->execute()) {
                if ($stmt->rowCount() == 1) {
                    $row = $stmt->fetch();
                    $username = $row['username'];
                    $email = $row['email'];
                    $cep = $row['cep'];
                    $telefone = $row['telefone'];
                }
            }
        }
    }

    unset($stmt);
    unset($pdo);
} else {
    header("Location: index.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Minha Conta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/CSS/home_style.css" />
</head>

<body>
    <?php include 'includes/header.php'; ?>
    <div class="container mt-5">
        <h1>Minha Conta</h1>

        <p>
            <strong>Nome de Usuário:</strong> <?php echo htmlspecialchars($username); ?><br>
            <strong>Email:</strong> <?php echo htmlspecialchars($email); ?><br>
            <strong>CEP:</strong> <?php echo htmlspecialchars($cep); ?><br>
            <strong>Telefone:</strong> <?php echo htmlspecialchars($telefone); ?><br>
        </p>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="mb-3">
                <label for="novo_email">Novo Email:</label>
                <input type="email" class="form-control" id="novo_email" name="novo_email">
            </div>
            <div class="mb-3">
                <label for="novo_cep">Novo CEP:</label>
                <input type="text" class="form-control" id="novo_cep" name="novo_cep">
            </div>
            <div class="mb-3">
                <label for="novo_telefone">Novo Telefone:</label>
                <input type="text" class="form-control" id="novo_telefone" name="novo_telefone">
            </div>
            <div class="mb-3">
                <label for="current_password">Senha Atual:</label>
                <input type="password" class="form-control" id="current_password" name="current_password">
            </div>
            <div class="mb-3">
                <label for="new_password">Nova Senha:</label>
                <input type="password" class="form-control" id="new_password" name="new_password">
            </div>
            <div class="mb-3">
                <label for="confirm_password">Confirmar Nova Senha:</label>
                <input type="password" class="form-control" id="confirm_password" name="confirm_password">
            </div>
            <button type="submit" class="btn btn-primary">Atualizar Informações</button>
            <?php if (!empty($error_message)) { ?>
                <p><?php echo $error_message; ?></p>
            <?php } ?>
        </form>
    </div>
</body>
</html>
