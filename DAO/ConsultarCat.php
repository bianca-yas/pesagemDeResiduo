<?php
    namespace PHP\Modelo\DAO;
    require_once('Conexao.php');
    use PHP\Modelo\DAO\Conexao;

    class ConsultarCat{
            function consultarCategoria(Conexao $conexao, string $categoria){
                try{
                    $conn = $conexao->conectar();
                    $sql = "select * from residuo where categoria = '$categoria'";
                    $result = mysqli_query($conn, $sql);

                    while($dados = mysqli_fetch_Array($result)){
                        if($dados['codigo'] == $codigo){
                            return "<br>Código do resíduo: ".$dados['codigo']. 
                                "<br>Peso: ".$dados['peso']. 
                                "<br>Categoria: ".$dados['categoria']. 
                                "<br>Data: ".$dados['dt']. 
                                "<br>Nome: ".$dados['nome']. 
                                "<br>Especialização: ".$dados['especializacao'];
                        }
                        return "Categoria digitada inválida!";
                    }
            }catch(Except $erro){
                return "<br>Algo deu errado!".$erro;
            }
        }
    }