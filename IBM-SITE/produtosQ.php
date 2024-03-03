<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Completlar - Sua Casa, Seu Estilo.</title>
    <link lr rel="shortcut icon" href="assets/assets/Imagens/Home/icons/logo.ico" type="image/x-icon" />
    <!-- Google fonts Lato -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
      rel="stylesheet"
    />
    <!-- CSS Bootstrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <!-- Bootstrap Icons -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"
    />
    <!-- CSS do projeto -->
    <link rel="stylesheet" href="assets/CSS/categoria.css" />
    <link rel="stylesheet"  type="text/css"  href="assets/CSS/mainProduto.css"/>
	  
    <!-- JavaScript Bootstrap -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
    <!--JQuery-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="assets/JS/app3.js"></script>
    
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


<br><br><br>


<div class="container text-center mx-auto p-2">
    <div class="row">
        <div class="col-md-2 d-flex flex-column align-items-center mx-auto p-2">
            <a href="produtos.php">
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
        $sql = "SELECT * FROM categoriaquarto LIMIT $itensPorPagina OFFSET $offset";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if ($result) {
            echo '<div class="row">';
            foreach ($result as $row) {
                echo '<div class="col-md-3">';
                echo '<div class="card-sl">';
                
                echo '<img src="' . $row['caminho_imagem'] . '" class="card-img-top custom-image-size img-fluid" alt="' . $row['nome'] . '" style="width: 100vh; height:300px;">';
         
                echo '<div class="card-body d-flex flex-column align-items-center" style="text-align: center; padding: 20px;margin:10px; background-color: #f8f9fa;">';
                echo  '<a class="card-action" href="#"><i class="fa fa-heart"></i></a>';
                echo '<div class="heading">' . $row['nome'] . '</div>';
                echo '<div class="card-text">' . $row['descricao_imagem'] . '</div>';
                echo '<div class="card-price">$' . $row['preco'] . '</div>';
                
              
                echo '<form method="post" action="adiciona_ao_carrinho.php">';
             
                echo '<input type="hidden" name="product_id" value="' . $row['IdQuarto'] . '">';
                echo '<input class="card-text" type="hidden" name="product_name" value="' . $row['nome'] . '">';
                echo '<input class="card-text" type="hidden" name="product_price" value="' . $row['preco'] . '">';
                echo '<button class="card-button" type="submit" name="add_to_cart" >Adicionar ao Carrinho</button>';
                echo '</form>';
        
              
        
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
            echo '</div>';
        } else {
            echo '<p class="text-center mt-5">Nenhum produto encontrado.</p>';
        }
        ?>

        </div>

   
</div>


    <br><br>
  <?php include 'includes/footer.php'; ?>
  
</body>
</html>