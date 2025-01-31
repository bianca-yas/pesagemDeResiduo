<?php
    namespace PHP\Modelo\Tela;
    require_once('..\Residuo.php');
    require_once('..\DAO\Inserir.php');
    require_once('..\DAO\Conexao.php');

    use PHP\Modelo\Residuo;
    use PHP\Modelo\DAO\Conexao;
    use PHP\Modelo\DAO\Inserir;
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
            <label for="lPeso" class="form-label">Peso:</label>
            <input type="text" class="form-control" id="tPeso" name="tPeso" placeholder="99.99kg">
        </div>

        <div class="mb-3">
            <label for="lCat" class="form-label">Categoria: </label>
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
        </div>

        

        <div class="mb-3">
            <label for="data" class="form-label">Data: </label>
            <input type="date" class="form-control" id="tData" name="tData" placeholder="00/00/0000">
        </div>

        <div class="mb-3">
            <label for="nome" class="form-label">Nome: </label>
            <input type="text" class="form-control" id="tNome" name="tNome" placeholder="Ex.: João Pedro">
        </div>

        <div class="mb-3">
            <label for="lEsp" class="form-label">Especialização: </label>
            <input type="text" class="form-control" id="tEsp" name="tEsp" placeholder="Técnico em Informática">
        </div>

        <button type="submit">Cadastrar
                <?php
                    $conexao = new Conexao();

                    if(isset($_POST['tPeso'])){
                        $peso = $_POST['tPeso'];
                        $categoria = $_POST['tCat'];
                        $data = $_POST['tData'];
                        $nome = $_POST['tNome'];
                        $especializacao = $_POST['tEsp'];

                        $inserir = new Inserir();
                        echo $inserir->cadastrarResiduo($conexao, $peso,$categoria,$data,$nome,$especializacao);
                    }
                ?>

            </button>
        </form>