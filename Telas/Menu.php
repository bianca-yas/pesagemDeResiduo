<?php
    namespace PHP\Modelo\Telas;
?>

<!Doctype HTML>
<html>
    <head>
    <meta charset="UTF-8">
        <title>Menu</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/estilo.css">
    </head>
    <body>
            <nav class="navbar bg-body-dark fixed-top">
                <div class="container-fluid">
                <a class="navbar-brand" href="css/imagens/senac-logo.png">
                    <figure>
                        <img scr="css/imagens/senac-logo.png">
                    </figure>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Ações
                        </a>
                        <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="InserirResiduos.php">Cadastrar</a></li>
                        <li><a class="dropdown-item" href="consultarResiduo.php">Consultar</a></li>
                        <li><a class="dropdown-item" href="atualizarResiduo.php">Atualizar</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="excluirResiduo.php">Excluir</a></li>
                        </ul>
                    </li>
                    </ul>
                </div>
                </div>
            </div>
        </nav>


        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="css/imagens/1.png" class="d-block w-100" alt="ecoeficiência">
                </div>
                <div class="carousel-item">
                <img src="css/imagens/2.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="css/imagens/3.png" class="d-block w-100" alt="...">
                </div>
            </div>
        </div>


    </body>