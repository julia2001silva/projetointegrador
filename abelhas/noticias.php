<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Nosso CSS -->
    <!--    <link href="css/nosso.css" rel="stylesheet" type="text/css" />-->
	 <!-- esse cara carrega os ícones do Bootstrap 5 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <title> Notícias </title>
</head>

<body>
    <div class="container-fluid">
    <header>

            <div class="row">
                <?php include('includes/nav.php'); ?> 
            </div>
        </header>
    </div>

    <article>
        <br>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"> CORONA VÍRUS AO REDOR DO MUNDO </h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercício ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                            <a href="#" class="btn btn-primary">Veja mais</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">VACINAÇÃO EM OUTROS PAISES</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercício ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                            <a href="#" class="btn btn-primary">Veja mais</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br>
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-md-6 col-sm-12 ">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title"> ECONOMIA EM MEIO A PANDEMIA</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercício ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                            <a href="#" class="btn btn-primary">Veja mais</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 col-sm-12  ">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">VARIANTE DO VÍRUS</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercício ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                            <a href="#" class="btn btn-primary">Veja mais</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <br>
    </article>

    <div class="row">
        <?php include('includes/footer.php'); ?>
    </div>


    <!-- Option 0: Bootstrap local no diretório /CSS -->
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>
