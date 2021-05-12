<?php $page = basename($_SERVER['PHP_SELF']) ?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

                    <a class="navbar-brand" href="#"><img src="images/l.png" alt="logo">Cuide-se</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">

                            <ul class="navbar-nav mr-auto">
                                <li class="nav-item">
									<a class="nav-link <?php if($page == "principal.php"):echo "disabled"; endif; ?>" href="principal.php">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?php if($page == "Politica.php"):echo "disabled"; endif; ?>" href="Politica.php">Políticas de combate</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?php if($page == "sobre a doença(g)outro.php"):echo "disabled"; endif; ?>" href="sobre a doença(g)outro.php">Sobre a doença</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?php if($page == "outraspandemias.php"):echo "disabled"; endif; ?>" href="outraspandemias.php">Outras Pandemias</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?php if($page == "noticias.php"):echo "disabled"; endif; ?>" href="noticias.php">Notícias</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?php if($page == "contato.php"):echo "disabled"; endif; ?>" href="contato.php">Contato</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?php if($page == "quemsomos.php"):echo "disabled"; endif; ?>" href="quemsomos.php">Quem somos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link <?php if($page == "normas.php"):echo "disabled"; endif; ?>" href="normas.php">Normas de uso</a>
                                </li>
                            </ul>
                        </div>
                    </div>


                </nav>
