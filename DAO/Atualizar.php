<?php
   namespace PHP\Modelo\DAO;
   require_once('Conexao.php');
   use PHP\Modelo\DAO\Conexao;

    class Atualizar{
         function atualizarResidous(Conexao $conexao, string $campo, string $novoDado,int $id){
            $conn = $conexao->conectar();
            $sql = "update residuos set $campo = '$novoDado' where id = '$id'   ";
            $result = mysqli_query($conn,$sql);
            mysqli_close($conn);
            if ($result){
                echo "<br>Atualizar com sucesso!";
            }else{
                echo "<br>Não atualizado";
            }     
        }          
        
        function atualizarFuncionario(Conexao $conexao,int $id,float $tipo, string $campo, string $novoDado){
            $conn = $conexao->conectar();
            $sql  = "update Funcionario set $campo = '$novoDado' where id = '$id' and tipo =' $tipo' ";
            $result = mysqli_query($conn,$sql);
            mysqli_close($conn);
            if ($result){
                echo "<br>Atualizar com sucesso!";
            }else{
                echo "<br>Não atualizado";
            }  
        }         
        }//fim do método
?>