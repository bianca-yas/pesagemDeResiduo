<?php
    namespace PHP\Modelo\DAO;
    require_once('Conexao.php');
    use PHP\Modelo\DAO\Conexao;

    class Atualizar{
        function attResiduo(Conexao $conexao, string $campo, string $novoDado, int $codigo){
            $conn = $conexao->conectar();
            $sql = "update residuo set $campo = '$novoDado' where codigo = '$codigo'";
            $result = mysqli_query($conn, $sql);
            mysqli_close($conn);
            if($result){
                echo "<br>Atualizado com sucesso!";
            }else{
                echo "<br>Não Atualizado!";
            }
        }
    }

?>