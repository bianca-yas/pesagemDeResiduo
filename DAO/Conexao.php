<?php
    namespace PHP\Modelo\DAO;

    class Conexao{
        function conectar(){
            try{
                $conn = mysqli_connect('localhost', 'root', '', 'pesagemResiduos');
                if($conn){
                    echo "<br>Conectado com sucesso!";
                    return $conn;
                }
                echo "<br>Algo deu errado!";
            }catch(Except $erro){
                return "Algo deu errado!";
            }
        }//fim da function
    }//fim da classe
?>
