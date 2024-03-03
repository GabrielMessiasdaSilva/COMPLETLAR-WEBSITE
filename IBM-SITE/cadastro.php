<?php
require_once "includes/conexao.php";

// Defina variáveis e inicialize com valores vazios
$username = $password = $confirm_password = $email = $cep = $telefone = "";
$username_err = $password_err = $confirm_password_err = $email_err = $cep_err = $telefone_err = "";
$pdo = new Conectar();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["email"])) {
        $email = trim($_POST["email"]);
        if (empty($email)) {
            $email_err = "Por favor, insira um email.";
        }
    }

    if (isset($_POST["cep"])) {
        $cep = trim($_POST["cep"]);
        if (empty($cep)) {
            $cep_err = "Por favor, insira um CEP.";
        }
    }

    if (isset($_POST["telefone"])) {
        $telefone = trim($_POST["telefone"]);
        if (empty($telefone)) {
            $telefone_err = "Por favor, insira um número de telefone.";
        }
    }

    if (isset($_POST["username"])) {
        if (empty($_POST["username"])) {
            $username_err = "Por favor coloque um nome de usuário.";
        } elseif (!preg_match('/^[a-zA-Z0-9_]+$/', trim($_POST["username"]))) {
            $username_err = "O nome de usuário pode conter apenas letras, números e sublinhados.";
        } else {
            // Prepare uma declaração selecionada
            $sql = "SELECT id FROM loginclientes WHERE username = :username";

            if ($stmt = $pdo->prepare($sql)) {
                // Vincule as variáveis à instrução preparada como parâmetros
                $stmt->bindParam(":username", $param_username, PDO::PARAM_STR);

                // Definir parâmetros
                $param_username = trim($_POST["username"]);

                // Tente executar a declaração preparada
                if ($stmt->execute()) {
                    if ($stmt->rowCount() == 1) {
                        $username_err = "Este nome de usuário já está em uso.";
                    } else {
                        $username = trim($_POST["username"]);
                    }
                } else {
                    echo "Ops! Algo deu errado. Por favor, tente novamente mais tarde.";
                }

                // Fechar declaração
                unset($stmt);
            }
        }
    }

    if (isset($_POST["password"])) {
        if (empty($_POST["password"])) {
            $password_err = "Por favor insira uma senha.";
        } elseif (strlen(trim($_POST["password"])) < 6) {
            $password_err = "A senha deve ter pelo menos 6 caracteres.";
        } else {
            $password = trim($_POST["password"]);
        }
    }

    if (isset($_POST["confirm_password"])) {
        if (empty($_POST["confirm_password"])) {
            $confirm_password_err = "Por favor, confirme a senha.";
        } else {
            $confirm_password = trim($_POST["confirm_password"]);
            if (empty($password_err) && ($password != $confirm_password)) {
                $confirm_password_err = "A senha não confere.";
            }
        }
    }

    // Verifique os erros de entrada antes de inserir no banco de dados
    if (empty($username_err) && empty($password_err) && empty($confirm_password_err)) {

        // Prepare uma declaração de inserção
        $sql = "INSERT INTO loginclientes (username, password, email, cep, telefone) VALUES (:username, :password, :email, :cep, :telefone)";

        if ($stmt = $pdo->prepare($sql)) {
            // Vincule as variáveis à instrução preparada como parâmetros
            $stmt->bindParam(":email", $param_email, PDO::PARAM_STR);
            $stmt->bindParam(":cep", $param_cep, PDO::PARAM_STR);
            $stmt->bindParam(":telefone", $param_telefone, PDO::PARAM_STR);
            $stmt->bindParam(":username", $param_username, PDO::PARAM_STR);
            $stmt->bindParam(":password", $param_password, PDO::PARAM_STR);

            // Definir parâmetros
            $param_email = $email;
            $param_cep = $cep;
            $param_telefone = $telefone;
            $param_username = $username;
            $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash

            // Tente executar a declaração preparada
            if ($stmt->execute()) {
                // Redirecionar para a página de login
                header("location: login.php");
            } else {
                echo "Ops! Algo deu errado. Por favor, tente novamente mais tarde.";
            }

            // Fechar declaração
            unset($stmt);
        }
    }

    // Fechar conexão
    unset($pdo);
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <?php include 'includes/header.php'; ?>
    <div class="container">
        <div class="row">
            <div class="col-md-6 right-column">
                <div class="message">
                    <h2>Bem-vindo ao nosso serviço de cadastro!</h2>
                    <p>Estamos felizes em tê-lo como parte da nossa comunidade. Nosso serviço oferece muitos recursos incríveis, e mal podemos esperar para tê-lo como membro.</p>
                </div>
            </div>
            <div class="col-md-6 left-column">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <div class="form-group">
                        <label>Nome do usuário</label>
                        <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                        <span class="invalid-feedback"><?php echo $username_err; ?></span>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" class="form-control <?php echo (!empty($email_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $email; ?>">
                        <span class="invalid-feedback"><?php echo $email_err; ?></span>
                    </div>
                    <div class "form-group">
                        <label>CEP</label>
                        <input type="text" name="cep" class="form-control <?php echo (!empty($cep_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $cep; ?>">
                        <span class="invalid-feedback"><?php echo $cep_err; ?></span>
                    </div>
                    <div class="form-group">
                        <label>Número de Telefone</label>
                        <input type="text" name="telefone" class="form-control <?php echo (!empty($telefone_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $telefone; ?>">
                        <span class="invalid-feedback"><?php echo $telefone_err; ?></span>
                    </div>
                    <div class="form-group">
                        <label>Senha</label>
                        <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $password; ?>">
                        <span class="invalid-feedback"><?php echo $password_err; ?></span>
                    </div>
                    <div class="form-group">
                        <label>Confirme a senha</label>
                        <input type="password" name="confirm_password" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $confirm_password; ?>">
                        <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Criar Conta">
                        <input type="reset" class="btn btn-secondary ml-2" value="Apagar Dados">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
