    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Completlar - Sua Casa, Seu Estilo.</title>
        <link rel="shortcut icon" href="assets/assets/Imagens/Home/icons/logo.ico" type="image/x-icon" />

        <!-- Google fonts Lato -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet" />

        <!-- CSS Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

        <!-- Bootstrap Icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />

        <!-- CSS do projeto -->
        <link rel="stylesheet" href="assets/CSS/mainProduto.css" />
        <link rel="stylesheet" href="assets/CSS/categoria.css" />

        <!-- JavaScript Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
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

        <div class="container mt-5">
    <?php
    // Conecte-se ao banco de dados
    include 'includes/conexao.php';
    $conn = new Conectar();

    // Número de resultados por página
    $resultadosPorPagina = 6;

    // Verifique se a página atual foi especificada na URL
    $paginaAtual = isset($_GET['pagina']) ? $_GET['pagina'] : 1;

    // Verifique se a variável de pesquisa está definida e não está vazia
    if (isset($_POST['pesquisar']) && !empty($_POST['pesquisar'])) {
        // Recupere a palavra-chave da barra de pesquisa
        $pesquisar = $_POST['pesquisar'];

        // Calcule o índice inicial
        $indiceInicial = ($paginaAtual - 1) * $resultadosPorPagina;

        // Conte o número total de resultados (sem limitação)
        $queryCount = "SELECT COUNT(*) as total FROM produtos WHERE nome LIKE :pesquisar OR descricao_imagem LIKE :pesquisar";
        $stmtCount = $conn->prepare($queryCount);
        $stmtCount->bindValue(':pesquisar', "%$pesquisar%", PDO::PARAM_STR);
        $stmtCount->execute();
        $totalResultados = $stmtCount->fetch(PDO::FETCH_ASSOC)['total'];

        // Calcule o número total de páginas
        $totalPaginas = ceil($totalResultados / $resultadosPorPagina);

        // Prepare a consulta SQL com a pesquisa aproximada e limitação
        $query = "SELECT * FROM produtos WHERE nome LIKE :pesquisar OR descricao_imagem LIKE :pesquisar LIMIT :inicio, :quantidade";
        $stmt = $conn->prepare($query);
        $stmt->bindValue(':pesquisar', "%$pesquisar%", PDO::PARAM_STR);
        $stmt->bindValue(':inicio', $indiceInicial, PDO::PARAM_INT);
        $stmt->bindValue(':quantidade', $resultadosPorPagina, PDO::PARAM_INT);
        $stmt->execute();

        // Exiba os resultados em cards
        $count = 0;

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            if ($count % 3 == 0) {
                // Abre uma nova linha a cada 3 produtos
                echo '<div class="row">';
            }

            echo '<div class="col-md-3">';
            echo '<div class="card-sl">';
            
            echo '<img src="' . $row['caminho_imagem'] . '" class="card-img-top custom-image-size img-fluid" alt="' . $row['nome'] . '" style="width: 100vh; height:300px;">';
     
            echo '<div class="card-body d-flex flex-column align-items-center" style="text-align: center; padding: 20px;margin:10px; background-color: #f8f9fa;">';
            echo  '<a class="card-action" href="#"><i class="fa fa-heart"></i></a>';
            echo '<div class="heading">' . $row['nome'] . '</div>';
            echo '<div class="card-text">' . $row['descricao_imagem'] . '</div>';
            echo '<div class="card-price">$' . $row['preco'] . '</div>';
            
          
            echo '<form method="post" action="adiciona_ao_carrinho.php">';
         
            echo '<input type="hidden" name="product_id" value="' . $row['IdProduto'] . '">';
            echo '<input class="card-text" type="hidden" name="product_name" value="' . $row['nome'] . '">';
            echo '<input class="card-text" type="hidden" name="product_price" value="' . $row['preco'] . '">';
            echo '<button class="card-button" type="submit" name="add_to_cart" >Adicionar ao Carrinho</button>';
            echo '</form>';
    
          
    
            echo '</div>';
            echo '</div>';
            echo '</div>';

            $count++;

            if ($count % 3 == 0 || $count == $totalResultados) {
                // Fecha a linha após cada conjunto de 3 produtos ou no último produto
                echo '</div>';
            }
        }

        // Adicione os botões de navegação entre páginas
        echo '<div class="row mt-4">';
        echo '<div class="col">';
        echo '<nav aria-label="Page navigation">';
        echo '<ul class="pagination justify-content-center">';

        for ($pagina = 1; $pagina <= $totalPaginas; $pagina++) {
            $classeAtiva = ($pagina == $paginaAtual) ? 'active' : '';
            echo '<li class="page-item ' . $classeAtiva . '">';
            echo '<a class="page-link" href="?pagina=' . $pagina . '&pesquisar=' . $pesquisar . '">' . $pagina . '</a>';
            echo '</li>';
        }

        echo '</ul>';
        echo '</nav>';
        echo '</div>';
        echo '</div>';
    } else {
        echo '<p class="text-center mt-5">Nenhum produto encontrado.</p>';
    }
    ?>
</div>

<br><br>
<?php include 'includes/footer.php'; ?>
</body>
</html>