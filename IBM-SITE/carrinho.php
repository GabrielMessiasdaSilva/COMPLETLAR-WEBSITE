

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
    <link rel="stylesheet" type="text/css" href="assets/CSS/carrinho.css" />
	  
    <!-- JavaScript Bootstrap -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>

  </head>
<body>


<?php
session_start();
include 'includes/header.php';
?>

  <!-- Seção de Paralaxe com Filtro de Imagem -->
  <div class="parallax-section">
        <!-- Filtro de Imagem -->
        <div class="parallax-filter"></div>

        <!-- Conteúdo da seção de paralaxe -->
        <div class="container parallax-content">
            <h1>Carrinho de Compras</h1>
            <p></p>
        </div>
    </div>
    <div class="process-wrap">
							<div class="process text-center active">
								<p><span>01</span></p>
								<h3>Carrinho de compras</h3>
							</div>
							<div class="process text-center">
								<p><span>02</span></p>
								<h3> Pagamento </h3>
							</div>
							<div class="process text-center">
								<p><span>03</span></p>
								<h3>Finalizado</h3>
							</div>
						</div>


<?php
include 'includes/conexao.php';
$conn = new Conectar();

if (isset($_SESSION['carrinho']) && count($_SESSION['carrinho']) > 0) {
    echo '<div class="container mt-5">';
    echo '<h1>Seu Carrinho de Compras</h1>';

    echo '<table class="table table-bordered">';
    echo '<thead class="table" style="background-color:#f0f0f0;">';
    echo '<tr><th>Detalhes do Produtos</th><th>Imagem Produto</th><th>Preço</th><th>Quantidade</th><th>Subtotal</th><th>Excluir Produtos</th></tr>';
    echo '</thead>';
    echo '<tbody>';

    $total = 0;
    $cart = array();

    foreach ($_SESSION['carrinho'] as $product_id => $product) {
        echo '<tr>';
        $stmt = $conn->prepare("SELECT nome, caminho_imagem, preco FROM produtos WHERE IdProduto = :product_id");
        $stmt->bindParam(':product_id', $product_id);
        $stmt->execute();
        $produto = $stmt->fetch();

        if ($produto) {
            echo '<td>' . $produto['nome'] . '</td>';
            if (isset($produto['caminho_imagem'])) {
                echo '<td><div class="thumbnail"><img src="' . $produto['caminho_imagem'] . '" alt="Imagem do Produto" class="img-thumbnail" style="max-width: 100px; max-height: 100px;"></div></td>';
            } else {
                echo '<td>Imagem não disponível</td>';
            }
            echo '<td>R$ ' . $produto['preco'] . '</td>';
            echo '<td>';
            echo '<input type="number" name="quantidade[' . $product_id . ']" value="' . $product['quantidade'] . '" class="form-control" min="1" onchange="updateSubtotal(' . $product_id . ', ' . $produto['preco'] . ')">';
            echo '</td>';
            $subtotal = $product['quantidade'] * $produto['preco'];
            echo '<td id="subtotal_' . $product_id . '">R$ ' . $subtotal . '</td>';
            echo '<td><a href="excluir_produto.php?produto_id=' . $product_id . '" class="btn btn-danger">Excluir</a></td>';
            $total += $subtotal;

            $item = array(
                'id' => $product_id,
                'nome' => $produto['nome'],
                'imagem' => $produto['caminho_imagem'],
                'preco' => $produto['preco'],
                'quantidade' => $product['quantidade'],
            );
            $cart[] = $item;
        } else {
            echo '<td></td>';
            echo '<td></td>';
            echo '<td></td>';
            echo '<td></td>';
        }

        echo '</tr>';
    }

    $cartJson = json_encode($cart);
    $_SESSION['cart_json'] = $cartJson;

    echo '</tbody>';
    echo '</table>';
    echo '<p class="h4">Total: <span id="total">R$ ' . $total . '</span></p>';
    echo '<div class="row">';
    echo '<div class="col-md-6">';
    echo '</div>';
    echo '<div class="col-md-6 text-end">';
    echo '<a href="produtos.php" class="btn btn-success">Continuar Comprando</a>';
    echo '<a class="btn btn-primary" href="checkout.php">Proximo</a>';
    echo '</div>';
    echo '</div>';
    echo '</form>';
    echo '</div>';
} else {
    echo '<p class="h4 text-center">Seu carrinho está vazio.</p>';
}
?>

<!-- Adicione aqui todos os links JavaScript, Bootstrap, etc. -->
<script>
    function updateSubtotal(product_id, preco) {
        var quantidadeInput = document.getElementsByName('quantidade[' + product_id + ']')[0];
        var subtotalElement = document.getElementById('subtotal_' + product_id);
        var totalElement = document.getElementById('total');

        var novaQuantidade = parseInt(quantidadeInput.value);
        var novoSubtotal = novaQuantidade * preco;

        subtotalElement.textContent = 'R$ ' + novoSubtotal.toFixed(2);

        var totalAtual = parseFloat(totalElement.textContent.replace('R$ ', ''));
        var diferencaSubtotal = novoSubtotal - (novaQuantidade - 1) * preco;
        totalElement.textContent = 'R$ ' + (totalAtual + diferencaSubtotal).toFixed(2);

        var cartJsonInput = document.getElementById('cart_json');
        var cartJson = JSON.parse(cartJsonInput.value);
        var produto = cartJson.find(item => item.id == product_id);
        produto.quantidade = novaQuantidade;
        cartJsonInput.value = JSON.stringify(cartJson);
    }
</script>






<script>
var cart = <?php echo $cartJson; ?>;
var totalElement = document.querySelector("#total");

function updateSubtotal(productId, productPrice) {
    const quantityInput = document.querySelector("input[name='quantidade[" + productId + "]']");
    const subtotalElement = document.querySelector("#subtotal_" + productId);
    const quantity = parseInt(quantityInput.value, 10);
    const subtotal = quantity * productPrice;

    // Atualizar o elemento de subtotal
    subtotalElement.textContent = "R$ " + subtotal.toFixed(2);

    // Atualizar o carrinho no objeto cart
    updateCart(productId, quantity);

    // Recalcular o total a partir de todos os subtotais
    let newTotal = 0;
    document.querySelectorAll("[id^='subtotal_']").forEach(function (subtotal) {
        newTotal += parseFloat(subtotal.textContent.split(' ')[1]);
    });

    // Atualizar o elemento total
    totalElement.textContent = "R$ " + newTotal.toFixed(2);
}

function updateCart(productId, newQuantity) {
    // Encontrar o produto no carrinho e atualizar a quantidade
    for (var i = 0; i < cart.length; i++) {
        if (cart[i].productId == productId) {
            cart[i].quantity = newQuantity;
            break;
        }
    }
}
</script>


    <br><br>
  <?php include 'includes/footer.php'; ?>
  




</body>
</html>