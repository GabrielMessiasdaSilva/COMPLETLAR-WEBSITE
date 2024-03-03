<?php


// Inicie a sessão se não estiver iniciada
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Verifique se o usuário não está logado
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    // Redirecionar para a página de login
    header("Location: login.php");
    exit();
}

if (isset($_SESSION['cart_json'])) {
    $cart = json_decode($_SESSION['cart_json'], true);

    // Calcular o total do pedido
    $totalPedido = 0;
    foreach ($cart as $item) {
        $totalPedido += $item['preco'] * $item['quantidade'];
    }
}

// Processar o formulário quando enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obter os dados do formulário
    $nomeCliente = $_POST['nome_cliente'];
    $sobrenomeCliente = $_POST['sobrenome_cliente'];
    $tipoPessoa = $_POST['tipo_pessoa'];
    $cpf = $_POST['cpf'];
    $pais = $_POST['pais'];
    $cep = $_POST['cep'];
    $endereco = $_POST['endereco'];
    $numero = $_POST['numero'];
    $complemento = $_POST['complemento'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $celular = $_POST['celular'];
    $email = $_POST['email'];
    $metodoPagamento = $_POST['metodo_pagamento'];

    // Inserir detalhes do pedido no banco de dados
    $stmtPedido = $conn->prepare("INSERT INTO pedidos (nome_cliente, endereco, total_pedido, metodo_pagamento) VALUES (:nome_cliente, :endereco, :total_pedido, :metodo_pagamento)");
    $stmtPedido->bindParam(':nome_cliente', $nomeCliente);
    $stmtPedido->bindParam(':endereco', $endereco);
    $stmtPedido->bindParam(':total_pedido', $totalPedido);
    $stmtPedido->bindParam(':metodo_pagamento', $metodoPagamento);
    $stmtPedido->execute();

    $idPedido = $conn->lastInsertId(); // Obter o ID do pedido recém-inserido

    // Inserir itens do pedido no banco de dados
    foreach ($cart as $item) {
        $stmtItens = $conn->prepare("INSERT INTO itens_pedido (id_pedido, nome_produto, preco, quantidade) VALUES (:id_pedido, :nome_produto, :preco, :quantidade)");
        $stmtItens->bindParam(':id_pedido', $idPedido);
        $stmtItens->bindParam(':nome_produto', $item['nome']);
        $stmtItens->bindParam(':preco', $item['preco']);
        $stmtItens->bindParam(':quantidade', $item['quantidade']);
        $stmtItens->execute();
    }

    // Limpar o carrinho
    unset($_SESSION['cart_json']);

    echo '<div class="container mt-5">';
    echo '<h1>Compra Finalizada</h1>';
    echo '<p>Obrigado por sua compra!</p>';
    echo '</div>';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finalizar Compra</title>

    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="assets/CSS/home_style.css">

</head>
<body>
<?php include 'includes/header.php'?>

<!-- Adicione o HTML para o formulário de finalizar compra -->
<div class="container mt-5">
    <h1>Finalizar Compra</h1>

    <div class="row">
        <div class="col-md-6">
            <!-- Seção de Informações Pessoais e de Entrega -->
            <h2>Informações Pessoais e de Entrega</h2>

            <form method="post" action="">
                <div class="mb-3">
                    <label for="nome_cliente" class="form-label">Nome:</label>
                    <input type="text" id="nome_cliente" name="nome_cliente" class="form-control" placeholder="Digite seu nome" required>
                </div>

                <div class="mb-3">
                    <label for="sobrenome_cliente" class="form-label">Sobrenome:</label>
                    <input type="text" id="sobrenome_cliente" name="sobrenome_cliente" class="form-control" placeholder="Digite seu sobrenome" required>
                </div>

                <div class="mb-3">
                    <label for="tipo_pessoa" class="form-label">Tipo de Pessoa:</label>
                    <select id="tipo_pessoa" name="tipo_pessoa" class="form-select" required>
                        <option value="fisica">Física</option>
                        <option value="juridica">Jurídica</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="cpf" class="form-label">CPF:</label>
                    <input type="text" id="cpf" name="cpf" class="form-control" placeholder="Ex:999.999.999-99" required>
                </div>

                <div class="mb-3">
                    <label for="pais" class="form-label">País:</label>
                    <input type="text" id="pais" name="pais" class="form-control" value="Brasil" readonly>
                </div>

                <div class="mb-3">
                    <label for="cep" class="form-label">CEP:</label>
                    <input type="text" id="cep" name="cep" class="form-control" placeholder="Ex:99999-999" required>
                </div>

                <div class="mb-3">
                    <label for="endereco" class="form-label">Endereço:</label>
                    <textarea id="endereco" name="endereco" class="form-control" placeholder="Digite seu endereço" required></textarea>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="numero" class="form-label">Número:</label>
                        <input type="text" id="numero" name="numero" class="form-control" placeholder="Ex:(99) 99999-9999" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="complemento" class="form-label">Complemento (opcional):</label>
                        <input type="text" id="complemento" name="complemento" class="form-control" placeholder="Digite o complemento">
                    </div>
                </div>

                <div class="mb-3">
                    <label for="bairro" class="form-label">Bairro:</label>
                    <input type="text" id="bairro" name="bairro" class="form-control" placeholder="Digite seu bairro" required>
                </div>

                <div class="mb-3">
                    <label for="cidade" class="form-label">Cidade:</label>
                    <input type="text" id="cidade" name="cidade" class="form-control" placeholder="Digite sua cidade" required>
                </div>

                <div class="mb-3">
                    <label for="estado" class="form-label">Estado:</label>
                    <input type="text" id="estado" name="estado" class="form-control" placeholder="Digite seu estado" required>
                </div>

                <!-- Adicione a opção de método de pagamento (Cartão de Crédito / Pix) -->
                <div class="mb-3">
                    <label for="metodo_pagamento" class="form-label">Método de Pagamento:</label>
                    <select id="metodo_pagamento" name="metodo_pagamento" class="form-select" required>
                        <option value="cartao">Cartão de Crédito</option>
                        <option value="pix">Pix</option>
                    </select>
                </div>


<!-- Div para exibir o QR code -->
<div id="qrcode" style="display: none;"></div>

<br><br>
                <!-- Adicione campos para informações de contato -->
                <div class="mb-3">
                    <label for="celular" class="form-label">Celular (DDDFone):</label>
                    <input type="text" id="celular" name="celular" class="form-control" placeholder="Digite seu número de celular" required>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="Digite seu email" required>
                </div>

             <!-- Adicione o botão para finalizar a compra -->
<button type="button" class="btn btn-primary" onclick="finalizarCompra()">Finalizar Compra</button>
            </form>
        </div>

        <div class="col-md-6">
            <!-- Seção de Pagamento -->
            <h2>Seu Pedido</h2>

            <!-- Inclua a div da lista de pedidos aqui -->
            <div class="order-list">
                <?php
                // Loop through the items in the cart and display the details
                if (isset($_SESSION['cart_json'])) {
                    $cart = json_decode($_SESSION['cart_json'], true);

                    if (!empty($cart)) {
                        foreach ($cart as $item) {
                            echo '<div class="product">';
                            echo '<img src="' . $item['imagem'] . '" alt="' . $item['nome'] . '" class="img" style="width: 300px; height: 300px;">';
                            echo '<h3>' . $item['nome'] . '</h3>';
                            echo '<p>Preço: R$ ' . $item['preco'] . '</p>';
                            echo '<p>Quantidade: ' . $item['quantidade'] . '</p>';
                            echo '</div>';
                        }
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>

<!-- Div para exibir a mensagem de agradecimento -->
<div id="mensagem-agradecimento" style="display: none;">
  <div class="container mt-5">
    <h1>Compra Finalizada</h1>
    <p>Obrigado por realizar a sua compra!</p>
  </div>
</div>


<?php
// Incluir o rodapé e fechar a conexão com o banco de dados
include 'includes/footer.php';
?>


<script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>
<script>
  function finalizarCompra() {
    const metodoPagamento = document.getElementById("metodo_pagamento").value;

    if (metodoPagamento === "pix") {
      // Simula o valor final do pedido (substitua pela lógica real)
      const valorFinal = 100.00;

      // Exibe o QR code com o valor final
      exibirQrCode(valorFinal);

      // Oculta o formulário
      ocultarFormulario();

      // Exibe a mensagem de agradecimento após um intervalo (simulando uma transação)
      setTimeout(function() {
        exibirMensagemAgradecimento();
      }, 3000); // Tempo em milissegundos (3 segundos no exemplo)
    } else {
      // Outras lógicas para métodos de pagamento diferentes
      // ...
    }
  }

  function exibirQrCode(valor) {
    const qrCodeDiv = document.getElementById("qrcode");
    qrCodeDiv.style.display = "block";

    // Use a biblioteca qrcode.js para gerar o QR code
    const qrcode = new QRCode(qrCodeDiv, {
      text: `Valor: ${valor}`,
      width: 128,
      height: 128
    });
  }

  function ocultarFormulario() {
    // Oculta o formulário (substitua pela lógica real)
    const formulario = document.getElementById("formulario");
    formulario.style.display = "none";
  }

  function exibirMensagemAgradecimento() {
    const mensagemDiv = document.getElementById("mensagem-agradecimento");
    mensagemDiv.style.display = "block";
  }

  function checkPaymentMethod() {
    const metodoPagamento = document.getElementById("metodo_pagamento").value;

    if (metodoPagamento === "cartao") {
      window.location.href = "pagina_cartao_credito.php"; // Substitua "pagina_cartao_credito.php" pela URL da sua página de preenchimento de dados do cartão de crédito
    }
  }

  (function() {
    const cepInput = document.querySelector("input[name=cep]");
    cepInput.addEventListener('blur', async () => {
      const cep = cepInput.value.replace(/[^0-9]+/, '');

      if (cep.length !== 8) {
        alert('CEP inválido. Por favor, insira um CEP válido.');
        return;
      }

      try {
        const response = await fetch(`https://viacep.com.br/ws/${cep}/json/`);
        const data = await response.json();

        if (data.hasOwnProperty('erro')) {
          alert('CEP não encontrado. Por favor, verifique o CEP inserido.');
        } else {
          // Preencher automaticamente os campos de endereço
          document.querySelector("textarea[name=endereco]").value = data.logradouro;
          document.querySelector("input[name=bairro]").value = data.bairro;
          document.querySelector("input[name=cidade]").value = data.localidade;
          document.querySelector("input[name=estado]").value = data.uf;
        }
      } catch (error) {
        console.error('Erro ao buscar o CEP:', error);
      }
    });
  })();
</script>
</body>
</html>