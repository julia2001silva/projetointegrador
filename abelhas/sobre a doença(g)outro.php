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
    <title> Title </title>
</head>

<body>

    <div class="container-fluid">
        <header>

            <div class="row">
                 <?php include('includes/nav.php'); ?>
            </div>
        </header>

    </div>


    <div class="container">

        <div class="row">

            <section class=" col-xl-12   d-flex justify-content-center mt-4">
                <img src="images/virus-4999857_1280.png">
                <h3 class>Terra doente</h3>
            </section>

        </div>

        <main>
            <div class="row">

                <article>
                    <div class="mt-4 col-12 col-md-6 col-lg-6 d-flex justify-content-center">
                        <h1> O QUE É A DOENÇA?</h1>
                    </div>
                    <div class="col-12">
                        <hr class="border border-3  border-dark">
                    </div>


            </div>


            <div class="row">
                <div class="d-flex justify-content-center">

                    <p class="col-7 pt-5"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer id odio tortor. Proin tincidunt justo non malesuada posuere. In vitae accumsan lectus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nulla nunc neque, sodales nec rhoncus ac, commodo id mauris. Vestibulum semper arcu sit amet faucibus congue. Donec dictum enim sed enim consectetur ornare. Duis venenatis hendrerit ex ac vestibulum</p>

                    <aside class="col-4 offset-1 ">
                        <img src="images/doctor-563429_1280.jpg">
                    </aside>
                </div>

            </div>


            <div class="row">

                <div class="mt-4 col-12 col-md-6 col-lg-6 d-flex justify-content-center">
                    <h1> SINTOMAS</h1>
                </div>
                <div class="col-12">
                    <hr class="border border-3  border-dark">
                </div>



            </div>


            <div class="row">

                <div class="col-6 d-flex justify-content-center">
                    <img src="images/woman-698964_1280.jpg">

                </div>
                <div class="col-6 d-flex justify-content-center">
                    <img src="images/upset-2681502_1280.jpg">

                </div>



                <div class="col-6 mt-2 d-flex justify-content-center">
                    <img src="images/thermometer-3656065_1280.jpg">

                </div>
                <div class="col-6 mt-2 d-flex justify-content-center">
                    <img src="images/disease-4392163_1280.jpg">

                </div>


            </div>


            <div class="row">

                <div class="mt-4 col-12 col-md-6 col-lg-6 d-flex justify-content-center">
                    <h1> PREVENÇÕES</h1>
                </div>
                <div class="col-12">
                    <hr class="border border-3  border-dark">
                </div>

            </div>

            <div class="row">


                <p class="col-12">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer id odio tortor. Proin tincidunt justo non malesuada posuere. In vitae accumsan lectus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nulla nunc neque, sodales nec rhoncus ac, commodo id mauris. Vestibulum semper arcu sit amet faucibus congue. Donec dictum enim sed enim consectetur ornare. Duis venenatis hendrerit ex ac vestibulum

                </p>



            </div>


            </article>
        </main>


        <?php include('includes/footer.php'); ?>

    </div>


    <!-- Option 0: Bootstrap local no diretório /CSS -->
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>
