<?php
    namespace PHP\Modelo\DAO;
    require_once('Conexao.php');
    use PHP\Modelo\DAO\Conexao;

    class ExcluirCat{
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