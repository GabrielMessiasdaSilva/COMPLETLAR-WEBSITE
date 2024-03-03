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
    <link rel="stylesheet" href="assets/CSS/blogstyle.css" />
	 
    <!-- JavaScript Bootstrap -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>

  </head>
  <body>

<!--Plugin de Ver Libras-->
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
  <!--fim do Ver Libras-->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  
  <?php include 'includes/header.php'; ?>






  <!-- Parallax Section -->
  <div class="parallax">
    <h1>BEM VINDO AO NOSSO BLOG ! COMPLETLAR</h1>
  </div>

 <!-- Main Content -->
 <div class="container mt-4">
  <div class="row">
      <!-- Main Column (Recent Posts) -->
      <div class="col-md-8">
          <!-- Post 1 -->
          <div class="card">
              <img src="assets/Imagens/blog/pexels-luana-freitas-17662165.jpg" class="card-img-top" alt="Card Image">
              <div class="card-body">
                  <h5 class="card-title">Móveis Planejados: Tendências e Estilos</h5>
                  <p class="card-text">
                      Os móveis planejados são uma opção cada vez mais popular para quem busca otimizar o espaço em sua casa ou escritório. Neste artigo, vamos explorar as tendências e estilos mais recentes em móveis planejados, desde designs modernos e minimalistas até abordagens mais clássicas e rústicas. Continue lendo para descobrir como os móveis planejados podem transformar o seu ambiente.
                  </p>
                  <a href="post1.html" class="btn btn-primary">Leia Mais</a>
              </div>
          </div>

          <!-- Post 2 -->
          <div class="card">
              <img src="assets/Imagens/blog/pexels-andrea-davis-3653849.jpg" class="card-img-top" alt="Card Image">
              <div class="card-body">
                  <h5 class="card-title">Dicas para Escolher Móveis Planejados</h5>
                  <p class="card-text">
                      A escolha dos móveis planejados é uma decisão importante para garantir a funcionalidade e o estilo do ambiente. Neste artigo, vamos compartilhar algumas dicas essenciais para ajudá-lo a escolher os móveis planejados ideais para a sua casa ou escritório. Desde a seleção de materiais até a consideração do espaço disponível, estas dicas serão úteis para tornar o processo de escolha mais fácil e satisfatório.
                  </p>
                  <a href="post2.html" class="btn btn-primary">Leia Mais</a>
              </div>
          </div>
      </div>

      <!-- Side Columns (Comments) -->
      <div class="col-md-4">
          <!-- Comentário 1 -->
          <div class="card">
              <div class="card-body">
                  <h5 class="card-title">Comentário 1</h5>
                  <p class="card-text">
                      "Ótimo artigo! Amei as dicas sobre móveis planejados."
                  </p>
              </div>
          </div>

          <!-- Comentário 2 -->
          <div class="card">
              <div class="card-body">
                  <h5 class="card-title">Comentário 2</h5>
                  <p class="card-text">
                      "Móveis planejados são a melhor solução para ambientes pequenos."
                  </p>
              </div>
          </div>
      </div>
  </div>
</div>
<?php include 'includes/footer.php'; ?>

  <!-- JavaScript Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>
