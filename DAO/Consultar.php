<?php
    namespace PHP\Modelo\DAO;
    require_once('Conexao.php');
    use PHP\Modelo\DAO\Conexao;

    class Consultar{
        function consultarResiduo(Conexao $conexao, int $codigo){
            try{
                $conn = $conexao->conectar();
                $sql = "select * from residuo where codigo = '$codigo'";
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
                    return "Código digitado inválido!";
                }
            }catch(Except $erro){
                return "<br>Algo deu errado!".$erro;
            }
        }//fim da function

    }
?>