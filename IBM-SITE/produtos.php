<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Completlar - Sua Casa, Seu Estilo</title>
    <link rel="shortcut icon" href="assets/Imagens/Home/icons/logo.ico" type="image/x-icon" />
    
    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />

    <!-- CSS do projeto -->
    <link rel="stylesheet"  type="text/css"  href="assets/CSS/mainProduto.css"/>
    <link rel="stylesheet"  type="text/css"  href="assets/CSS/categoria.css" />


    <style>
   body {
    font-family: Varela Round;
    background: #f1f1f1;
}

a {
    text-decoration: none;
}

/* Card Styles */

.card-sl {
    border-radius: 8px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

.card-image img {
    max-height: 100%;
    max-width: 100%;
    border-radius: 8px 8px 0px 0;
}

.card-action {
    position: relative;
    float: right;
    margin-top: -25px;
    margin-right: 20px;
    z-index: 2;
    color: #E26D5C;
    background: #fff;
    border-radius: 100%;
    padding: 15px;
    font-size: 15px;
    box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.2), 0 1px 2px 0 rgba(0, 0, 0, 0.19);
}

.card-action:hover {
    color: #fff;
    background: #E26D5C;
    -webkit-animation: pulse 1.5s infinite;
}

.card-heading {
    font-size: 20px;
    font-weight: bold;
    background: #fff;
    padding: 10px 15px;
}

.card-price {
    padding: 10px 15px;
    background: #fff;
    font-size: 18px;
    color: #E26D5C; /* Changing the price color to make it more eye-catching */
    border-bottom-left-radius: 8px;
    border-bottom-right-radius: 8px;
}

.card-text {
    padding: 10px 15px;
    background: #fff;
    font-size: 13px;
    color: #636262;
}

.card-button {
    display: flex;
    justify-content: center;
    padding: 10px 0;
    width: 100%;
    background-color: #1F487E;
    color: #fff;
    border-radius: 30px;
    border: none;
}

.card-button:hover {
    text-decoration: none;
    background-color: #1D3461;
    color: #fff;

}
.new-label {
    background-color: #E26D5C;
    color: #fff;
    padding: 5px 10px;
    border-radius: 5px;
    position: absolute;
    top: 10px;
    left: 10px;
    font-size: 12px;
    font-weight: bold;
    text-transform: uppercase;
}


@-webkit-keyframes pulse {
    0% {
        -moz-transform: scale(0.9);
        -ms-transform: scale(0.9);
        -webkit-transform: scale(0.9);
        transform: scale(0.9);
    }

    70% {
        -moz-transform: scale(1);
        -ms-transform: scale(1);
        -webkit-transform: scale(1);
        transform: scale(1);
        box-shadow: 0 0 0 50px rgba(90, 153, 212, 0);
    }

    100% {
        -moz-transform: scale(0.9);
        -ms-transform: scale(0.9);
        -webkit-transform: scale(0.9);
        transform: scale(0.9);
        box-shadow: 0 0 0 0 rgba(90, 153, 212, 0);
    }
}       
</style>

</head>

<body>
    <!-- Plugin de Ver Libras -->
    <div vw class="enabled">
        <div vw-access-button class="active"></div>
        <div vw-plugin-wrapper>
            <div class="vw-plugin-top-wrapper"></div>
        </div>
    </div>
    <script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
    <script>
        new window.VLibras.Widget('https://vlibras.gov.br/app');
    </script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php include 'includes/header.php'; ?>

<br><br>
    <div class="container text-center mx-auto p-2">
    <div class="row">
        <div class="col-md-2 d-flex flex-column align-items-center mx-auto p-2">
            <a href="produtosAdap.php">
                <img src="assets/Imagens/Produtos/adaptados.jpg" class="img-fluid rounded-circle img-zoom" alt="Imagem 1">
                <p>Adaptados</p>
            </a>
        </div>
        <div class="col-md-2 d-flex flex-column align-items-center mx-auto p-2">
            <a href="produtosSE.php">
                <img src="assets/Imagens/Produtos/saladestarr.jpg" class="img-fluid rounded-circle img-zoom" alt="Imagem 1">
                <p>Sala De Estar</p>
            </a>
        </div>
        <div class="col-md-2 d-flex flex-column align-items-center mx-auto p-2">
            <a href="produtosQ.php">
                <img src="assets/Imagens/Produtos/quartos.jpg" class="img-fluid rounded-circle img-zoom" alt="Imagem 1">
                <p>Quartos</p>
            </a>
        </div>
        <div class="col-md-2 d-flex flex-column align-items-center mx-auto p-2">
            <a href="produtosC.php">
                <img src="assets/Imagens/Produtos/cozinhaa.jpg" class="img-fluid rounded-circle img-zoom" alt="Imagem 1">
                <p>Cozinha</p>
            </a>
        </div>
        <div class="col-md-2 d-flex flex-column align-items-center mx-auto p-2">
            <a href="produtosE.php">
                <img src="assets/Imagens/Produtos/escrito.jpg" class="img-fluid rounded-circle img-zoom" alt="Imagem 1">
                <p>Escritório</p>
            </a>
        </div>
    </div>
</div><br>
<div class="container mt-5">
    <div class="row">
        <?php
        include 'includes/conexao.php';
        $conn = new Conectar();

        $itensPorPagina = 6;
        $paginaAtual = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
        $totalProdutos = $conn->query("SELECT COUNT(*) as total FROM produtos")->fetch()['total'];
        $totalPaginas = ceil($totalProdutos / $itensPorPagina);
        $offset = ($paginaAtual - 1) * $itensPorPagina;
        $sql = "SELECT * FROM produtos LIMIT $itensPorPagina OFFSET $offset";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if ($result) {
            foreach ($result as $row) {
                ?>
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="card">
                        <div class="card-img-container" style="height: 300px; overflow: hidden;">
                            <img src="<?php echo $row['caminho_imagem']; ?>" class="card-img-top img-fluid" style="object-fit: cover; height: 100%; width: 100%;" alt="<?php echo $row['nome']; ?>">
                        </div>
                        <div class="card-body d-flex flex-column align-items-center" style="min-height: 200px;">
                        <?php
                            // Check if the product is new (you might have a field or logic for this)
                            $is_new = true; // For demonstration, assuming all products are new
                            if ($is_new) {
                                echo '<span class="new-label">Novo Produto</span>';
                            }
                            ?>
                            <a class="card-action mb-auto" href="#"><i class="fa fa-heart"></i></a>
                            <h5 class="card-title"><?php echo $row['nome']; ?></h5>
                            <p class="card-text" style="display: -webkit-box; -webkit-line-clamp: 3; -webkit-box-orient: vertical; overflow: hidden; text-overflow: ellipsis;">
                                <?php echo $row['descricao_imagem']; ?>
                            </p>
                            <p class="card-price">R$<?php echo number_format($row['preco'], 2, ',', '.'); ?></p>    
                            <form method="post" action="adiciona_ao_carrinho.php">
                                <input type="hidden" name="product_id" value="<?php echo $row['IdProduto']; ?>">
                                <input type="hidden" name="product_name" value="<?php echo $row['nome']; ?>">
                                <input type="hidden" name="product_price" value="<?php echo $row['preco']; ?>">
                                <button class="card-button" type="submit" name="add_to_cart">Adicionar ao Carrinho</button>
                            </form>
                        </div>
                    </div>
                </div>
                <?php
            }
        } else {
            echo '<p class="text-center mt-5">Nenhum produto encontrado.</p>';
        }
        ?>
    </div>

    <nav aria-label="Page navigation">
        <ul class="pagination justify-content-center mt-4">
            <?php
            if ($paginaAtual > 1) {
                echo '<li class="page-item"><a class="page-link" href="?pagina=' . ($paginaAtual - 1) . '">Anterior</a></li>';
            }

            for ($i = 1; $i <= $totalPaginas; $i++) {
                echo '<li class="page-item ' . ($paginaAtual === $i ? 'active' : '') . '"><a class="page-link" href="?pagina=' . $i . '">' . $i . '</a></li>';
            }

            if ($paginaAtual < $totalPaginas) {
                echo '<li class="page-item"><a class="page-link" href="?pagina=' . ($paginaAtual + 1) . '">Próxima</a></li>';
            }
            ?>
        </ul>
    </nav>
</div>


    <br><br>
    <?php include 'includes/footer.php'; ?>
</body>
</html>
