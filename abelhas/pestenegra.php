<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Nosso CSS -->
     <link href="css/nosso.css" rel="stylesheet" type="text/css" />
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

<br>
<article>
    <div class="container">
        <div class="row">
          <header>
            <p class="h5">PESTE NEGRA</p>
        
            <p class="col-xl-12 col-md-12 col-sm-12">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                 Ut enim ad minim veniam, quis nostrud exercício ullamco laboris nisi
                  ut aliquip ex ea commodo consequat. velit esse cillum dolore eu fugiat 
                  nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                   culpa qui officia deserunt mollit anim id est laborum.</p>
       
                   <p class="col-xl-12 col-md-12 col-sm-12">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                     Ut enim ad minim veniam, quis nostrud exercício ullamco laboris nisi
                      ut aliquip ex ea commodo consequat. velit esse cillum dolore eu fugiat 
                      nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                       culpa qui officia deserunt mollit anim id est laborum.</p>
                       </header>
           
      </div>
        </div>
<br>

        <div class="container">
            <div class="row">
                
                <p class="col-xl-10 col-md-9 col-sm-12" >Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                     Ut enim ad minim veniam, quis nostrud exercício ullamco laboris nisi
                      ut aliquip ex ea commodo consequat. velit esse cillum dolore eu fugiat 
                      nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                       culpa qui officia deserunt mollit anim id est laborum.</p>  
                   
                       <aside class="col-xl-2 col-md-3 col-sm-12">
                       <img src="images/1-medico-peste-negra.jpg" class=" img-fluid " alt="peste negra" />
                       </aside>
          </div>
            </div>

           <br>

            <div class="container">
                <div class="row">
                  
                
                    <p class="col-xl-12 col-md-12 col-sm-12">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                         Ut enim ad minim veniam, quis nostrud exercício ullamco laboris nisi
                          ut aliquip ex ea commodo consequat. velit esse cillum dolore eu fugiat 
                          nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                           culpa qui officia deserunt mollit anim id est laborum.</p>
               
                           <p class="col-xl-12 col-md-12 col-sm-12">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                             Ut enim ad minim veniam, quis nostrud exercício ullamco laboris nisi
                              ut aliquip ex ea commodo consequat. velit esse cillum dolore eu fugiat 
                              nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                               culpa qui officia deserunt mollit anim id est laborum.</p>
                   
              </div>
                </div>

                <br>
                   <div class="container">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img src="images/banner.png" class="d-block w-100 " alt="...">
                        </div>
                        <div class="carousel-item">
                          <img src="images/banner.png" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                          <img src="images/banner.png" class="d-block w-100" alt="...">
                        </div>
                      </div>
                      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                      </button>
                    </div>
                   </div>
</article>

<br>

             <div class="row">
               <?php include('includes/footer.php'); ?> 
          </div>

    <!-- Option 0: Bootstrap local no diretório /CSS -->
    <script src="js/bootstrap.bundle.min.js"></script>
</body></html>
