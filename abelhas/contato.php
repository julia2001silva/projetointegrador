<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Nosso CSS -->
    <link href="css/nosso.css" rel="stylesheet" type="text/css">
	 <!-- esse cara carrega os ícones do Bootstrap 5 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <title> Contato </title>
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

        <div class="container">
            <div class="row">
                <h5>CONTATO</h5>
                <br>
                <br>
            </div>
        </div>

        <div class="container">
            <div class="row">

                <p class="col-xl-4 col-md-4 col-sm-12">FALE CONOSCO <br><br> ipsum dolor sit amet, consectetur adipiscing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercício ullamco laboris nisi
                    ut aliquip ex ea commodo consequat. velit esse cillum dolore eu fugiat
                    nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                    culpa qui officia deserunt mollit anim id est laborum.</p>

                <p class="col-xl-4  col-md-4 col-sm-12">TIRE DÚVIDAS <br><br> ipsum dolor sit amet, consectetur adipiscing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercício ullamco laboris nisi
                    ut aliquip ex ea commodo consequat. velit esse cillum dolore eu fugiat
                    nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                    culpa qui officia deserunt mollit anim id est laborum.</p>

                <p class="col-xl-4 col-md-4 col-sm-12">PEÇA AJUDA <br><br> ipsum dolor sit amet, consectetur adipiscing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercício ullamco laboris nisi
                    ut aliquip ex ea commodo consequat. velit esse cillum dolore eu fugiat
                    nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                    culpa qui officia deserunt mollit anim id est laborum.</p>





            </div>
        </div>


        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-md-12 col-sm-12">
                    <form>
                    <label for="exampleFormControlInput1" class="form-label">Digite seu nome:</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1">
                </div>
                <div class="col-xl-12 col-md-12 col-sm-12">
                    <label for="exampleFormControlInput1" class="form-label">Digite seu Email:</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="nome@exemplo.com">
                </div>
                <div class="col-xl-12 col-md-12 col-sm-12">
                    <label for="exampleFormControlTextarea1" class="form-label">Digite a mensagem:</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    <br>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                    </form>
                </div>

            </div>
        </div>
    </article>

    <br>
    <br>
    <div class="row">
        <?php include('includes/footer.php'); ?>
    </div>


    <!-- Option 0: Bootstrap local no diretório /CSS -->
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>
