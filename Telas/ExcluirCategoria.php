<?php
    namespace PHP\Modelo\Tela;
    require_once('..\Residuo.php');
    require_once('..\DAO\ExcluirCat.php');
    require_once('..\DAO\Conexao.php');

    use PHP\Modelo\Residuo;
    use PHP\Modelo\DAO\Conexao;
    use PHP\Modelo\DAO\ExcluirCat;

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
                    <li><a href="excluirMenu.php">EXCLUIR</a></li>
                </ul>
            </nav>
        </header>

        <main>


            <div class="intro">
                <h2>PROJETO ECOEFICIÊNCIA</h2>
                <figure>
                    <img src="css/imagens/ecosus.jpg" class="banner">
                </figure>
            </div>

            <form class="form" method="POST">
                <label for="lCat" class="form-label">Escolha a categoria que deseja excluir:</label>
                            <select name="tCat">
                                <option value="naoReciclavel">Não Reciclável</option>
                                <option value="reciclavel">Reciclável</option>
                                <option value="oleo">Oleo</option>
                                <option value="tampinhas">Tampinhas plásticas</option>
                                <option value="lacres">Lacres de alumínio</option>
                                <option value="tecidos">Tecidos</option>
                                <option value="meias">Meias</option>
                                <option value="esponjas">Esponjas</option>
                                <option value="eletronicos">Eletrônicos</option>
                                <option value="pilhasEBaterias">Pilhas e baterias</option>
                                <option value="infectante">Infectantes</option>
                                <option value="quimicos">Químicos</option>
                                <option value="lampadas">Lampada fluorescente</option>
                                <option value="tonners">Tonners de impressora</option>
                                <option value="esmalte">Esmalte</option>
                                <option value="comesticos">Comésticos</option>
                                <option value="cartelas">Cartela de medicamento</option>
                                <option value="outro">Outro</option>
                            </select><br><br>


                <button type="submit">Excluir
                        <?php
                            $conexao = new Conexao();
                            $categoria = $_POST['tCat'];
                            $excluir = new ExcluirCat();
                        ?>
                    </button>
            </form>
            <?php echo $excluir->excluirCategoria($conexao,$categoria); ?>



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
</html>