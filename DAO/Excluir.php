<?php
   namespace PHP\Modelo\DAO;
   require_once('Conexao.php');
   use PHP\Modelo\DAO\Conexao;

   class Excluir{
    function excluirResiduos(Conexao $conexao,string $dt,string $instituicao,string $classificacao)
    {
        try{
            $conn = $conexao->conectar();
            $sql  = "delete from residuos where Dt = '$dt' AND instituicao = '$instituicao' AND classificacao = '$classificacao'";
            $result = mysqli_query($conn,$sql);
            mysqli_close($conn);
            if($result){
                echo "<br>Excluido com sucesso";
            }else{
                echo "<br><br>Não foi deletado";
            }
        }
        catch(Exception $erro)
        {
            echo $erro;
        }
    }

        function excluirFuncionario(Conexao $conexao,string $cpf){
            $conn = $conexao->conectar();
            $sql  = "delete from Funcionario where codigo = '$cpf'";
            $result = mysqli_query($conn,$sql);
            mysqli_close($conn);
            if ($result){
                echo "<br>Excluido com sucesso!";
            }else{
                echo "<br>Não foi deletado";
            }  
        }         
        }//fim do método
?>
    
 
