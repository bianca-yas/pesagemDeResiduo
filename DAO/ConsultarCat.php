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

                    $r = "";


                while($dados = mysqli_fetch_Array($result)){
                        $r .= "<br><br>Código do resíduo: ".$dados['codigo']. 
                                    " Peso: ".$dados['peso']. 
                                    " Categoria: ".$dados['categoria']. 
                                     " Data: ".$dados['dt']. 
                                    " Nome: ".$dados['nome']. 
                                    " Especialização: ".$dados['especializacao']."<br><br>";
                }
                return $r;
            }
            catch(Exception $erro){
                return "<br>Algo deu errado!".$erro;
            }
        }//fim da function
    }