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


        function consultarDatas(Conexao $conexao, string $data){
            try{
                $conn = $conexao->conectar();
                $sql = "select * from residuo where dt = '$date'";
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
                    return "Data digitada inválida!";
                }
            }catch(Except $erro){
                return "<br>Algo deu errado!".$erro;
            }
        }


        function consultarTudo(Conexao $conexao){
            try{
                $conn = $conexao->conectar();
                $sql = "select * from residuo";
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
                }
            }catch(Except $erro){
                return "<br>Algo deu errado!".$erro;
            }
        }
    }
?>