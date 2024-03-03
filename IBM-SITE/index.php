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
    <link rel="stylesheet" href="assets/CSS/home_style.css" />
	   
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


  <?php include 'includes/header.php'; ?>






<!-- Carrossel -->
<div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <!-- Slide 1 -->
    <div class="carousel-item active">
      <img src="assets/Imagens/Home/imagens/carousel/imagem1.jpg" class="d-block w-100" alt="Slide 1">
      <div class="carousel-caption">
        <h3>Crie Seu Espaço Perfeito
        </h3>
        <p>"Na nossa loja, transformamos seus sonhos em realidade, criando ambientes únicos e acolhedores."
        </p>
        <a href="produtos.php" class="btn btn-primary">Saiba mais</a>
      </div>
    </div>
    <!-- Slide 2 -->
    <div class="carousel-item">
      <img src="assets/Imagens/Home/imagens/carousel/imagem4.jpg"class="d-block w-100" alt="Slide 2">
      <div class="carousel-caption">
        <h3>Design Personalizado para Seu Lar</h3>
        <p>"Nossos móveis planejados são feitos sob medida para refletir sua personalidade e estilo de vida."
        </p>
        <a href="produtos.php" class="btn btn-primary">Saiba mais</a>
      </div>
    </div>
    <!-- Slide 3 -->
    <div class="carousel-item">
      <img src="assets/Imagens/Home/imagens/carousel/imagem3.jpg" class="d-block w-100" alt="Slide 3">
      <div class="carousel-caption">
        <h3>Móveis Planejados: Estilo e Funcionalidade</h3>
<p>"Qualidade, beleza e funcionalidade se unem em cada peça que entregamos para você."
</p>        
<a href="produtos.php" class="btn btn-primary">Saiba mais</a>
      </div>
    </div>
  </div>
  <!-- Previous and Next Buttons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>






<!-- Coloque essa seção abaixo do carrossel -->
<div class="container" id="mobile-icons">
  <div class="row text-center">
    <div class="col-md-2 py-3">
      <a href="ProdutosSE.php">
        <img src="assets/Imagens/Home/icons/chair.png" alt="Cadeira">
      </a>
      <h4>Cadeira</h4>
    </div>
    <div class="col-md-2 py-3">
      <a href="ProdutosSE.php">
        <img src="assets/Imagens/Home/icons/sideboard.png" alt="Mesa">
      </a>
      <h4>Mesa</h4>
    </div>
    <div class="col-md-2 py-3">
      <a href="ProdutosSE.php">
        <img src="assets/Imagens/Home/icons/sofa.png" alt="Sofá">
      </a>
      <h4>Sofá</h4>
    </div>
    <div class="col-md-2 py-3">
      <a href="ProdutosQ.php">
        <img src="assets/Imagens/Home/icons/kitchen.png" alt="Armário">
      </a>
      <h4>Armário</h4>
    </div>
    <div class="col-md-2 py-3">
      <a href="ProdutosQ.php">
        <img src="assets/Imagens/Home/icons/lamp.png" alt="Abajurs">
      </a>
      <h4>Abajur</h4>
    </div>
    <div class="col-md-2 py-3">
      <a href="ProdutosQ.php">
        <img src="assets/Imagens/Home/icons/nightstand.png" alt="Comodas">
      </a>
      <h4>Comôdas</h4>
    </div>
  </div>
</div>







<hr>
<section class="cards1">
  <div class="container mt-5">
    <div class="row">
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card h-100">
                <div class="card-body text-center">
                    <i class="bi bi-truck" style="font-size: 48px; color: #42423f;"></i>
                    <h5 class="card-title mt-4">Entrega Segura</h5>
                        <p class="card-text">Entregamos qualidade e comodidade na porta da sua casa.</p>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card h-100">
                <div class="card-body text-center">
                    <i class="bi bi-credit-card" style="font-size: 48px; color: #42423f;"></i>
                    <h5 class="card-title mt-4">Pagamentos Seguros</h5>
                    <p class="card-text">
                      Compre com confiança usando métodos de pagamento seguros.</p>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card h-100">
                <div class="card-body text-center">
                    <i class="bi bi-clock" style="font-size: 48px; color: #42423f;"></i>
                    <h5 class="card-title mt-4">Entrega Rápida
                 </h5>
                    <p class="card-text">Entrega rápida e confiável direto na sua porta.</p>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card h-100">
                <div class="card-body text-center">
                    <i class="bi bi-gift" style="font-size: 48px; color: #42423f;"></i>
                    <h5 class="card-title mt-4">Orçamento</h5>
                    <p class="card-text">
                      Embrulho de presente de cortesia para ocasiões especiais</p>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card h-100">
                <div class="card-body text-center">
                    <i class="bi bi-award" style="font-size: 48px; color: #42423f;"></i>
                    <h5 class="card-title mt-4">Garantia de Qualidade</h5>
                    <p class="card-text">
                      Garantimos a qualidade de nossos produtos.</p>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card h-100">
                <div class="card-body text-center">
                  <div class="card h-100">
                    <i class="bi bi-chat-dots" style="font-size: 48px; color: #42423f;"></i>
                    <h5 class="card-title mt-4">Suporte ao Cliente</h5>
                    <p class="card-text">
                      Suporte ao cliente 24 horas por dia, 7 dias por semana para ajudá-lo.</p>
                </div>
            </div>
        </div>
    </div>
</div>


</section>
<div class="container mt-5">
 
</div>

<!-- Efeito Parallax -->
<div class="parallax">
  <div class="parallax-content">
     
  </div>
</div>

<hr>

   <!-- card1 -->
    <div class="container">
        <h3 class="text-center" style="padding-top: 30px;"></h3>
        <div class="row" style="margin-top: 50px;">
            <div class="col-md-4 py-3 py-md-0">
                <div class="card">
                    <img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=658&q=80" alt="" class="card image-top" height="200px">
                    <div class="card-body">
                        <h5 class="card-titel text-center">Armarinho</h5>
                        <p class="text-center">Entre os benefícios dos armários planejados está o fato de ter a chance de moldá-los da forma que você desejar.</p>
                        <div id="btn2" class="text-center"><button>Ver mais</button></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 py-3 py-md-0">
                <div class="card">
                    <img src="assets/Imagens/Home/imagens/imagens_cards/closet.jpg" alt="" class="card image-top" height="200px">
                    <div class="card-body">
                        <h5 class="card-titel text-center">Closet</h5>
                        <p class="text-center">Transforme um cômodo da casa ou parte dele, que não esteja sendo utilizado, em um prático e aconchegante closet.:</p>
                        <div id="btn2" class="text-center"><button>Ver mais</button></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 py-3 py-md-0">
                <div class="card">
                    <img src="assets/Imagens/Home/imagens/imagens_cards/sofá.jpg" alt="" class="card image-top" height="200px">
                    <div class="card-body">
                        <h5 class="card-titel text-center">Sofá</h5>
                        <p class="text-center">Muitas vezes um mínimo detalhe é capaz de fazer toda a diferença na composição de um ambiente e na vida de uma pessoa.</p>
                        <div id="btn2" class="text-center"><button>Ver mais</button></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- card1 -->

    <!-- card2 -->
    <div class="container">
        <div class="row" style="margin-top: 100px;">
            <div class="col-md-4 py-3 py-md-0">
                <div class="card" id="tpc">
                    <img src="assets/Imagens/Home/imagens/modern furniture.png" alt="" class="card image-top">
                    <div class="card-img-overlay">
                      
   
                    </div>
                </div>
            </div>
            <div class="col-md-4 py-3 py-md-0">
                <div class="card" id="tpc">
                    <img src="assets/Imagens/Home/imagens/imagens_main/img1.png" alt="" class="card image-top">
                    <div class="card-img-overlay">
                      
                        
          
                    </div>
                </div>
            </div>
            <div class="col-md-4 py-3 py-md-0">
                <div class="card" id="tpc">
                    <img src="assets/Imagens/Home/imagens/imagens_main/img2.png" alt="" class="card image-top">
                    <div class="card-img-overlay">
                        </div>
                    </div>
                </div>
            </div>
        </div>
  
    <!-- card2 -->

    <!-- card3 -->
    <div class="container">
        <h3 class="text-center" style="margin-top: 50px;">Produtos/Adaptados</h3>
        <div class="row" style="margin-top: 50px;">
            <div class="col-md-3 py-3 py-md-0">
                <div class="card" id="c">
                    <img src="assets/Imagens/Home/imagens/imagens_cards/mesa-escolar.jpg" alt="" class="card image-top" >
                    <div class="card-body">
                        <h3 class="card-titel text-center">Mesa Escolar</h3>
                        <p class="card-text text-center">R$100</p>
                        <div id="btn3" ><button>Explorar</button></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 py-3 py-md-0">
                <div class="card" id="c">
                    <img src="assets/Imagens/Home/imagens/imagens_cards/mesa.jpg" alt="" class="card image-top">
                    <div class="card-body">
                        <h3 class="card-titel text-center">Mesa adaptada</h3>
                        <p class="card-text text-center">R$100.50</p>
                        <div id="btn3"><button>Explorar</button></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 py-3 py-md-0">
                <div class="card" id="c">
                    <img src="assets/Imagens/Home/imagens/imagens_main/gabinete.jpg" alt="" class="card image-top">
                    <div class="card-body">
                        <h3 class="card-titel text-center">Gabinete</h3>
                        <p class="card-text text-center">R$300.20</p>
                        <div id="btn3"><button>Explorar</button></div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 py-3 py-md-0">
                <div class="card" id="c">
                    <img src="assets/Imagens/Home/imagens/imagens_cards/guarda2.jpg" alt="" class="card image-top">
                    <div class="card-body">
                        <h3 class="card-titel text-center">Guarda Roupa</h3>
                        <p class="card-text text-center">R$500.50</p>
                        <div id="btn3"><button>Explorar</button></div>
                    </div>
                </div>
            </div>
        </div>



         <hr>
		 
     <!-- DESTAQUES -->

    <div class="col-12">
      <h2 class="title primary-color">Trabalhos em Destaque</h2>
      <p class="subtitle secondary-color">
        Conheça um pouco de nossos móveis
      </p>
    </div>
    <div class="col-12" id="featured-images">
      <div class="row g-4">
        <div class="col-12 col-md-4">
          <img src="assets/Imagens/Home/imagens/imagens_main/gdr1.jpg" alt="Projeto 1" class="img-fluid" >
          <div class="banner-content">
            <p class="secondary-color">Guarda roupa</p>
            <h3>Guarda roupa</h3>
          </div>
        </div>
        <div class="col-12 col-md-4">
          <img src="assets/Imagens/Home/imagens/imagens_main/closet.jpg" alt="Projeto 2" class="img-fluid" >
          <div class="banner-content">
            <p class="secondary-color">Closet</p>
            <h3>Closet</h3>
          </div>
        </div>
        <div class="col-12 col-md-4">
          <img src="assets/Imagens/Home/imagens/imagens_main/cadeira.jpg" alt="Projeto 3" class="img-fluid" >
          <div class="banner-content">
            <p class="secondary-color">cadeira</p>
            <h3>cadeira</h3>
          </div>
        </div>
        <div class="col-12 col-md-4">
          <img src="assets/Imagens/Home/imagens/imagens_main/guarda-roupa.jpg" alt="Projeto 4" class="img-fluid" >
          <div class="banner-content">
            <p class="secondary-color">Guarda-Roupa</p>
            <h3>Guarda-Roupa</h3>
          </div>
        </div>
        <div class="col-12 col-md-4">
          <img src="assets/Imagens/Home/imagens/imagens_main/guarda2.jpg" alt="Projeto 5" class="img-fluid" />
          <div class="banner-content">
            <p class="secondary-color">Guarda-Roupa-Casal</p>
            <h3>Guarda-Roupa-Casal</h3>
          </div>
        </div>
        <div class="col-12 col-md-4">
          <img src="assets/Imagens/Home/imagens/imagens_main/guarda1.jpg" alt="Projeto 6" class="img-fluid" />
          <div class="banner-content">
            <p class="secondary-color">Guarda-Roupa</p>
            <h3>Guarda-Roupa</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- INFO -->
  <br><br><br>
  <div class="container" id="info-container">
    <div class="col-12">
      <h2 class="title primary-color">Detalhes Importantes</h2>
      <p class="subtitle secondary-color">
        Saiba mais sobre a experiência da nossa incrível equipe
      </p>
    </div>
    <div class="col-12">
      <div class="row">
        <div class="col-12 col-md-5" id="info-banner">
          <img src="assets/Imagens/Home/imagens/carousel/sobrenós.png" alt="Informações" class="img-fluid" >
        </div>
        <div class="col-12 col-md-7 bg-secondary-color" id="info-content">
          <div class="row">
            <div class="col-12">
              <h2 class="title">Estes dados fazem a diferença:</h2>
              <p class="subtitle secondary-color">
                Complet Lar é uma loja de móveis acessivel que foca em móveis planejados, para pessoas com baixa estatura ou como problemas crônicos como nanismo. 
              </p>
            </div>
            <div class="col-12" id="info-numbers">
              <div class="row">
                <div class="col-4">
                  <h3 class="primary-color">3</h3>
                  <p class="secondary-color">Anos dentro do ramo</p>
                </div>
                <div class="col-4">
                  <h3 class="primary-color">110</h3>
                  <p class="secondary-color">Móveis planejados</p>
                </div>
                <div class="col-4">
                  <h3 class="primary-color">835</h3>
                  <p class="secondary-color">Clientes saisfeitos</p>
                </div>
              </div>
            </div>
            <div class="col-12">
              <a href ="sobre-nós.html" class="btn btn-dark">Saber Mais</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php include 'includes/footer.php'; ?>
</body>
</html>