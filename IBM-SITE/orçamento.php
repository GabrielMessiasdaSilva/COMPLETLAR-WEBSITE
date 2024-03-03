

    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Completlar - Sua Casa, Seu Estilo</title>
        <link rel="shortcut icon" href="assets/assets/Imagens/Home/icons/logo.ico" type="image/x-icon" />
        <!-- Google fonts Lato -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet" />
        <!-- CSS Bootstrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
        <!-- Bootstrap Icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
        <!-- CSS do projeto -->
        <link rel="stylesheet" href="assets/CSS/orcamento.css" />
    </head>
    <body>


    <?php include 'includes/header.php' ?>







    <div class="bg-light">
  <div class="container py-5">
    <div class="row h-100 align-items-center py-5">
      <div class="col-lg-6">
        <h1 class="display-4">Deseja fazer um Orçamento?</h1>
        <p class="lead text-muted mb-0">Temos Marceneiros especializados para te Ajudar!</p>
        
        <br><br>
        <p class="font-italic text-muted mb-4">1. Conte o seu projeto de marceneiros e se quiser, inclua fotos.</p>
        <p class="font-italic text-muted mb-4">2. Profissionais e empresas de marceneiros serão avisados do seu projeto.</p>
        <p class="font-italic text-muted mb-4">3. Os que se interessarem, entrarão em contato com você..</p>

        <br><br>
        <button class="btn btn-light px-5 rounded-pill shadow-sm" data-bs-target="#exampleModalToggle1" data-bs-toggle="modal">Realizar Orçamento </button>

      
        </p>
      </div>
      <div class="col-lg-6 d-none d-lg-block"><img src="assets/Imagens/Orcamento/Marceneiro.png" alt="" class="img-fluid"></div>
    </div>
  </div>
</div>

<div class="bg-white py-5">
  <div class="container py-5">
    <div class="row align-items-center mb-5">
      <div class="col-lg-6 order-2 order-lg-1"><i class="fa fa-bar-chart fa-2x mb-3 text-primary"></i>
        <h2 class="font-weight-light"></h2>
        <p class="font-italic text-muted mb-4">O preço médio a ser investido nos trabalhos de um marceneiro podem variar de acordo com uma série de fatores, como, por exemplo, o tipo de madeira a ser utilizada, o tamanho da peça que será fabricada, o acabamento escolhido e a quantidade de serviço, já que alguns profissionais podem fazer um preço melhor caso você feche um pacote para realizar vários trabalhos com ele. Porém, podemos falar em alguns valores médios para os principais serviços realizados por marceneiros:

A diária de contratação de um marceneiro custa entre R$ 350 e R$ 500, dependerá da distância, tipo de trabalho a ser feito e se o profissional trabalha sozinho ou para alguma empresa de marcenaria.
Móveis sob medida: para fabricar móveis sob medida com madeiras de qualidade, os marceneiros geralmente cobram em torno de R$ 2.500 o m².
Painel de madeira: no caso de um painel para televisão de até 50 polegadas, incluindo prateleiras nas laterais e na parte de baixo do móvel, o preço médio fica em torno de R$ 2.500.
Reparar portas: o valor cobrado por esse trabalho geralmente é de R$ 230 por cada porta restaurada, variando conforme o tipo de defeito que a porta apresenta.
Instalar piso de madeira: o valor cobrado apenas pela instalação é de aproximadamente R$ 90 o m². Caso deseje incluir também os materiais, deverá investir cerca de R$ 400 o m², no caso do assoalho de madeira, ou R$ 350 o m², no caso do parquet.
Restaurar móvel: o preço médio de um serviço de restauração de móveis é de R$ 400 por cada peça restaurada, podendo variar conforme as condições em que o móvel se encontra.
Esses preços são apenas uma estimativa geral baseada em valores cobrados pelos principais serviços de marceneiros. Se quiser saber exatamente quanto irá gastar, o ideal é solicitar orçamentos conforme as suas necessidades.</p>
      </div>
      <div class="col-lg-5 px-5 mx-auto order-1 order-lg-2"><img src="assets/Imagens/Orcamento/mulher.png" alt="dupla de marceneiro svg" class="img-fluid"></div>
    </div>
    <div class="row align-items-center">
      <div class="col-lg-5 px-5 mx-auto"><img src="assets/Imagens/Orcamento/dupla.png" alt="dupla de marceneiro svg" class="img-fluid"></div>
      <div class="col-lg-6"><i class="fa fa-leaf fa-2x mb-3 text-primary"></i>
        <h2 class="font-weight-light">É muito caro?</h2>
        <p class="font-italic text-muted mb-4">O valor médio cobrado pelos serviços de marcenaria é de R$ 1.800 o m². Para receber um preço compatível com a sua região, peça orçamentos para marceneiros.Dependerá do tamanho do projeto.
</p>

        <button class="btn btn-light px-5 rounded-pill shadow-sm" data-bs-target="#exampleModalToggle1" data-bs-toggle="modal">Realizar Orçamento </button>

      </div>
    </div>
  </div>
</div>





    <form method="post" action="process_orcamento.php">
            <input type="hidden" name="step" value="1"> <!-- Use isso para controlar o progresso do formulário -->

    <!-- Modal 1 -->

    <div class="modal fade" id="exampleModalToggle1" aria-hidden="true" aria-labelledby="exampleModalToggleLabel1" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalToggleLabel1">Que tipo de trabalho você precisa?</h1>
            
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="input-group input-group-sm mb-3">
        <input type="text" class="form-control form-control-lg" name="tipoTrabalho" placeholder="Exemplo: Pintores, Marceneiros" aria-label=".form-control-lg example">

    </div>
        <div class="modal-body">

            <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Next</button>
        </div>
        </div>
    </div>
    </div>
    <!-- Modal 2 -->
    <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">Você precisa dos orçamentos em qual região?</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <label for="cep" class="form-label">Digite o CEP:</label>
            <input type="text" name="cep" id="cep" pattern="[0-9]{5}-[0-9]{3}" title="Formato válido: 12345-678" required>

            <div class="invalid-feedback">Por favor, forneça um CEP válido no formato 12345-678.</div>
            <button class="btn btn-primary" data-bs-target="#exampleModalToggle3" data-bs-toggle="modal">Next</button>
            <button class="btn btn-secondary" data-bs-target="#exampleModalToggle1" data-bs-toggle="modal">Previous</button>
        </div>
        </div>
    </div>
    </div>

    <!-- Modal 3 -->
    <div class="modal fade" id="exampleModalToggle3" aria-hidden="true" aria-labelledby="exampleModalToggleLabel3" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalToggleLabel3">Você já tem algum orçamento?</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <label for="budgetInput"></label>
            <div class="form-check">
            <input type="radio" class="form-check-input" id="yesOption" name="budget" value="Sim">
            <label class="form-check-label" for="yesOption">Sim</label>
            </div>
            <div class="form-check">
            <input type="radio" class="form-check-input" id="noOption" name="budget" value="Não">
            <label class="form-check-label" for="noOption">Não</label>
            </div>
            <button class="btn btn-primary" data-bs-target="#exampleModalToggle4" data-bs-toggle="modal">Next</button>
            <button class="btn btn-secondary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Previous</button>
        </div>
        </div>
    </div>
    </div>


    <!-- Modal 4 -->
    <div class="modal fade" id="exampleModalToggle4" aria-hidden="true" aria-labelledby="exampleModalToggleLabel4" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalToggleLabel4">É proprietário/a do imóvel/local ou está autorizado/a a realizar as alterações solicitadas?</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            </button>
        </div>
        <div class="modal-body">
            <label for="ownershipInput"></label>
            <div class="form-check">
            <input type="radio" class="form-check-input" id="yesOption" name="ownership" value="Sim">
            <label class="form-check-label" for="yesOption">Sim</label>
            </div>
            <div class="form-check">
            <input type="radio" class="form-check-input" id="noOption" name="ownership" value="Não">
            <label class="form-check-label" for="noOption">Não</label>
            </div>
            <div class="form-check">
            <input type="radio" class="form-check-input" id="comprar" name="ownership" value="Comprar">
            <label class="form-check-label" for="comprar">Estou Pensando em Comprar</label>
            </div>
            <button class="btn btn-primary" data-bs-target="#exampleModalToggle5" data-bs-toggle="modal">Next</button>
            <button class="btn btn-secondary" data-bs-target="#exampleModalToggle3" data-bs-toggle="modal">Previous</button>
        </div>
        </div>
    </div>
    </div>

    <!-- Modal 5 -->
    <div class="modal fade" id="exampleModalToggle5" aria-hidden="true" aria-labelledby="exampleModalToggleLabel5" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalToggleLabel5">Quando pretende começar o trabalho?</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <label for="startDate">Selecione a data de início:</label>
            <select class="form-select" id="startDate" name="startDate">
            <option value="O antes possível">O antes possível</option>
            <option value="De 1 a 3 meses">De 1 a 3 meses</option>
            <option value="Mais de 3 meses">Mais de 3 meses</option>
            <option value="Por enquanto não o penso fazer">Por enquanto não o penso fazer</option>
            </select>
            <button class="btn btn-primary" data-bs-target="#exampleModalToggle6" data-bs-toggle="modal">Next</button>
            <button class="btn btn-secondary" data-bs-target="#exampleModalToggle4" data-bs-toggle="modal">Previous</button>
        </div>
        </div>
    </div>
    </div>

    <!-- Modal 6 -->
    <div class="modal fade" id="exampleModalToggle6" aria-hidden="true" aria-labelledby="exampleModalToggleLabel6" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalToggleLabel6">Algo mais que acrescentar? (Opcional)</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <label for="additionalDetails">Descreve os Móveis como será,como você quer os seus Móveis</label>
            <textarea class="form-control" id="additionalDetails" name="additionalDetails" rows="5" placeholder="Digite seus detalhes aqui..."></textarea>
            <button class="btn btn-primary" data-bs-target="#exampleModalToggle7" data-bs-toggle="modal">Next</button>
            <button class="btn btn-secondary" data-bs-target="#exampleModalToggle5" data-bs-toggle="modal">Previous</button>
        </div>
        </div>
    </div>
    </div>

    <!-- Modal 7 -->
    <div class="modal fade" id="exampleModalToggle7" aria-hidden="true" aria-labelledby="exampleModalToggleLabel7" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalToggleLabel7">Insira seus dados de contato</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <label for="name">Nome:</label>
            <input type="text" class="form-control" id="name" name="name" required>

            <label for="email">E-mail:</label>
            <input type="email" class="form-control" id="email" name="email" required>

            <label for="phone">Telefone:</label>
            <input type="tel" class="form-control" id="phone" name="phone" required>

            <div class="form-check">
            <input type="checkbox" class="form-check-input" id="privacyPolicy" name="privacyPolicy" required>
            <label class="form-check-label" for="privacyPolicy">Li e aceito a Política de Privacidade e os Termos de uso</label>
            </div>

            <div class="form-check">
            <input type="checkbox" class="form-check-input" id="receivePromotions" name="receivePromotions">
            <label class="form-check-label" for="receivePromotions">Desejo receber informações, alerta de promoções e ofertas comerciais</label>
            </div>

            <button class="btn btn-primary" data-bs-target="#exampleModalToggle8" data-bs-toggle="modal">Next</button>
            <button class="btn btn-secondary" data-bs-target="#exampleModalToggle6" data-bs-toggle="modal">Previous</button>
        </div>
        </div>
    </div>
    </div>






    <?php include 'includes/footer.php'?>


    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
                                <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
                                <script type='text/javascript' src='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js'></script>
                                <script type='text/javascript'></script>
    <script src="assets/js/modalscript.js"></script>
    </body>
    </html>