<?php
    namespace PHP\Modelo\Tela;
    require_once('..\DAO\Atualizar.php');
    require_once('..\DAO\Conexao.php');
    use PHP\Modelo\DAO\Conexao;
    use PHP\Modelo\DAO\Atualizar;

?>

<!Doctype HTML>
<html>
    <head>
    <meta charset="UTF-8">
        <title>Menu</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/estilo.css">
        <style>
            body{
                background-color: white;
            }

            main{
                background-color: white;
                padding: 20px;

                min-width: 320px;
                max-width: 1920px;
                margin: auto;
            }

            img{
                width: 100%;
            }

            .form{
                min-width: 320px;
                max-width: 1920px;
                margin: auto;

                padding: 50px;
            }
        </style>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Major+Mono+Display&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');

            h2{
                font-weight: 900;
                color: #839766;
            }
        </style>
    </head>
    <body>
        <header>
            <nav>
                <a class="logo"><img src="css/imagens/logo.png" width="100" height="50"></a>
                <ul class="nav-list">
                    <li><a href="menu.php">HOME</a></li>
                    <li><a href="consultarMenu.php">CONSULTAR</a></li>
                    <li><a href="atualizarResiduo.php">ATUALIZAR</a></li>
                    <li><a href="excluirResiduo.php">EXCLUIR</a></li>
                </ul>
            </nav>
        </header>

        <main>


            <div class="intro">
                <h2>PROJETO ECOEFICIÊNCIA</h2>
                <figure>
                </figure>
            </div>


            <div class="form">
                <h2>ATUALIZAR RESÍDUOS</h2><br><br>
                <form method="POST">
                        <label for="codigo" class="form-label">Código do resíduo: </label>
                        <input type="number" class="form-control" id="tCodigo" name="tCodigo">

                        <label for="lCat" class="form-label">Selecione o campo que deseja atualizar: </label>
                        <select name="tCampo">
                            <option value="peso">Peso</option>
                            <option value="data">Data</option>
                            <option value="categoria">Categoria</option>
                            <option value="nome">Nome</option>
                            <option value="especializacao">Especialização</option>
                        </select><br><br>
                    
                        <label for="novo" class="form-label">Novo Dado: </label>
                        <input type="text" class="form-control" id="tNovoDado" name="tNovoDado">
                    

                    <button type="submit">Atualizar
                            <?php
                                $conexao = new Conexao();

                                if(isset($_POST['tCodigo'])){
                                    $atualizar = new Atualizar();

                                    $codigo = $_POST['tCodigo'];
                                    $campo = $_POST['tCampo'];
                                    $novoDado = $_POST['tNovoDado'];
                                }
                            ?>
                        </button>
                </form>
                <?php
                    if(isset($_POST['tCpf'])){
                        echo $atualizar->attResiduo($conexao,$campo,$novoDado,$codigo);
                    }
                ?>
            </div>
        </main>


        <section class="">
            <!-- Footer -->
            <footer class="text-center text-white" style="background-color: ##657A47;">
                <!-- Grid container -->
                <div class="container p-4 pb-0">
                <!-- Section: CTA -->
                <section class="">
                    <p class="d-flex justify-content-center align-items-center">
                    <button data-mdb-ripple-init type="button" class="btn btn-outline-light btn-rounded">
                        <a href="menu.php">Home</a>
                    </button>
                    </p>
                </section>
                <!-- Section: CTA -->
                </div>
                <!-- Grid container -->

                <!-- Copyright -->
                <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                © 2020 Copyright:
                <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
                </div>
                <!-- Copyright -->
            </footer>
            <!-- Footer -->
        </section>

    </body>