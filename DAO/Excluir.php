<?php
    namespace PHP\Modelo\DAO;
    require_once('Conexao.php');
    use PHP\Modelo\DAO\Conexao;

    class Excluir{
        function excluirResiduo(Conexao $conexao, int $codigo){
            $conn = $conexao->conectar();
            $sql  = "delete from residuo where codigo = '$codigo'";
            $result = mysqli_query($conn, $sql);
            mysqli_close($conn);

            if($result){
                echo "Deletado com sucesso!";
            }else{
                echo "Não deletado!";
            }
        }//fim da function

        function excluirCategoria(Conexao $conexao, string $categoria){
            $conn = $conexao->conectar();
            $sql  = "delete from residuo where categoria = '$categoria'";
            $result = mysqli_query($conn, $sql);
            mysqli_close($conn);

            if($result){
                echo "Deletado com sucesso!";
            }else{
                echo "Não deletado!";
            }
        }

    }
?>