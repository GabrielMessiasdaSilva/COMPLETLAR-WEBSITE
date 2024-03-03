<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprovação de Orçamento</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>    
    <style>
        .card {
            width: 15rem;
            margin: 10px;
        }
        .card-body {
            padding: 5px;
        }
        .btn-primary {
            margin-top: 5px;
            padding: 5px 15px;
            font-size: 12px;
        }
        .card-text {
            font-size: 12px;
            margin-bottom: 5px;
        }
    </style>
</head>
<body>

<?php include 'header2.php'; ?>

<div class="container">
    <div class="row justify-content-center align-items-center">
        <?php
        try {
            $conn = new PDO("mysql:host=localhost;dbname=completlar", "root", ""); 
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = "SELECT * FROM orcamentos";
            $result = $conn->query($sql);

            if ($result->rowCount() > 0) {
                while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                    echo '<div class="card">';
                    echo '<div class="card-body">';
                    echo '<p class="card-text">Nome: ' . $row["nome"] . '</p>';
                    echo '<p class="card-text">Tipo de Trabalho: ' . $row["tipoTrabalho"] . '</p>';
                    echo '<p class="card-text">Proprietário: ' . $row["ownership"] . '</p>';
                    echo '<p class="card-text">Data de Início: ' . $row["startDate"] . '</p>';
                    echo '<p class="card-text">E-mail: ' . $row["email"] . '</p>';
                    echo '<form action="process_aprovar_orcamento.php" method="post">';
                    echo '<input type="hidden" name="orcamento_id" value="' . $row["id"] . '">';
                    echo '<label for="status">Alterar Status: </label>';
                    echo '<select class="form-control" id="status" name="status">';
                    echo '<option value="Pendente">Pendente</option>';
                    echo '<option value="Aprovado">Aprovado</option>';
                    echo '<option value="Rejeitado">Rejeitado</option>';
                    echo '</select>';
                    echo '<label for="price">Adicionar Preço: </label>';
                    echo '<input type="text" name="price" class="form-control">';
                    echo '<button type="submit" class="btn btn-primary">Enviar</button>';
                    echo '</form>';
                    echo '</div>';
                    echo '</div>';
                }
            } else {
                echo 'Nenhum orçamento pendente.';
            }
        } catch (PDOException $e) {
            echo "Erro ao conectar ao banco de dados: " . $e->getMessage();
        }

        $conn = null;
        ?>
    </div>
</div>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<?php include 'footer.php'; ?>

</body>
</html>
