<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Completlar - Sua Casa, Seu Estilo.</title>
  <link lr rel="shortcut icon" href="assets/Imagens/Home/icons/logo.ico" type="image/x-icon" />
  <!-- Google fonts Lato -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
    rel="stylesheet" />
  <!-- CSS Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
  <!-- CSS do projeto -->
  <link rel="stylesheet" href="assets/CSS/home_style.css" />

  <!-- JavaScript Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

</head>

<body>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
  
<?php include 'includes/header.php'; ?>



  <!-- Main Content -->
  <div class="container mt-5">
    <h1 class="text-center mb-4">Entre em Contato</h1>
    <div class="row">
      <div class="col-md-6 mb-4">
        <!-- Contact Form -->
        <div class="contact-form">
          <form>
            <div class="form-group">
              <label for="name">Nome:</label>
              <input type="text" class="form-control" id="name" placeholder="Digite seu nome">
            </div>
            <div class="form-group">
              <label for="email">Email:</label>
              <input type="email" class="form-control" id="email" placeholder="Digite seu email">
            </div>
            <div class="form-group">
              <label for="message">Mensagem:</label>
              <textarea class="form-control" id="message" rows="4" placeholder="Digite sua mensagem"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
          </form>
        </div>
      </div>
      <div class="col-md-6">
        <!-- Contact Image -->
        <img src="assets/Imagens/contato/contato.png" alt="Imagem de contato" class="contact-image img-fluid">
      </div>
    </div>
  </div>
  <?php include 'includes/footer.php'; ?>

  <script src="JS/carrosel.js"></script>
</body>

</html>
<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>