<html>

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css.css" media="screen" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
</head>

<body style="background-color: #03203a;">
    <div class="card box2 shadow-sm">
        <form action="processar_form.php" method="post">
            <div class="d-flex align-items-center justify-content-between p-md-5 p-4">
                <span class="h5 fw-bold m-0">Insira abaixo os dados do cartão:</span>
                
            </div>

            <ul class="nav nav-tabs mb-3 px-md-4 px-2">
               
                    </span>

            <form action="">
                <div class="row">
                    <div class="col-12">
                        <div class="d-flex flex-column px-md-5 px-4 mb-4">

                            <span>Número do cartão</span>
                            <div class="inputWithIcon">
                                <input class="form-control" type="text" value="ex: 5136 1845 5468 3894">

                                <span class="">
                                    <img src="https://www.freepnglogos.com/uploads/mastercard-png/mastercard-logo-logok-15.png"
                                        alt=""></span>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="d-flex flex-column ps-md-5 px-md-0 px-4 mb-4">
                            <span>Data da<span class="ps-1">Expiração</span></span>
                            <div class="inputWithIcon">
                                <input type="text" class="form-control" value="ex: 05/20"> <span
                                    class="fas fa-calendar-alt">

                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="d-flex flex-column pe-md-5 px-md-0 px-4 mb-4">
                            <span>Código CVV</span>
                            <div class="inputWithIcon">
                                <input type="password" class="form-control" value="">
                                <span class="fas fa-lock"> </span>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="d-flex flex-column px-md-5 px-4 mb-4">
                            <span>Nome </span>
                            <div class="inputWithIcon">
                                <input class="form-control text-uppercase" type="text" value="ex: valdimir santos">
                                <span class="far fa-user"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 px-md-5 px-4 mt-3">
                        <input class="form-control" type="text" name="numero_cartao" placeholder="Número do Cartão">
                    </div>
                    <div class="col-12 px-md-5 px-4 mt-3">
                        <button type="submit" class="btn btn-primary w-100">Realizar pagamento</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js">
        
    </script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
        
     </script>
</body>

</html>