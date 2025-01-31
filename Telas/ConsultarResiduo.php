<?php
    namespace PHP\Modelo\Tela;
    require_once('..\Residuo.php');
    require_once('..\DAO\Consultar.php');
    require_once('..\DAO\Conexao.php');

    use PHP\Modelo\Residuo;
    use PHP\Modelo\DAO\Conexao;
    use PHP\Modelo\DAO\Consultar;
?>

<!Doctype HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastro Resíduos</title>
        <link rel="stylesheet" href="css/estilo.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    </head>
    <body>

        <form method="POST">
        <div class="mb-3">
            <label for="lCodigo" class="form-label">Código do resíduo:</label>
            <input type="number" class="form-control" id="tCodigo" name="tCodigo">
        </div>


        <button type="submit">Cadastrar
                <?php
                    $conexao = new Conexao();
                    $codigo = $_POST['tCodigo'];
                    $inserir = new Inserir();
                        echo $inserir->consultarResiduo($conexao,$codigo);
                    
                ?>
            </button>
        </form>
        <?php echo $inserir->consultarResiduo($conexao,$codigo); ?>
</body>
</html>