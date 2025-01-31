<?php
    namespace PHP\Modelo\DAO;
    require_once('Conexao.php');
    use PHP\Modelo\DAO\Conexao;


    class Inserir{
        function cadastrarResiduo(Conexao $conexao,
                                  string $data,
                                  string $peso,
                                  string $categoria,
                                  string $nome,
                                  string $especializacao
        ){
            try{
                $conn = $conexao->conectar();
                $sql  = "Insert into residuo(codigo, peso, categoria, dt, nome, especializacao)
                        values('','$peso','$categoria','$data','$nome','$especializacao')";
                $result = mysqli_query($conn, $sql);
                mysqli_close($conn);
                

                if($result){
                    return "<br><br>Inserido com sucesso!";
                }
                return "<br><br>Não Inserido!";
            }
            catch(Except $erro)
            {
                return "<br><br>Algo deu errado!".$erro;
            }
        }
        
    }


?>