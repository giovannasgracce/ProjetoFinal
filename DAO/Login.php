<?php
namespace PHP\Modelo\DAO;
require_once('Conexao.php');
use PHP\Modelo\DAO\Conexao;

class Login {
    public function loginPessoa(Conexao $conexao, string $cpf) {
        try {
            $conn = $conexao->conectar();
            $sql  = "select codigo, tipo from Funcionario where codigo = '$cpf'";
            $result = mysqli_query($conn,$sql);
            while($dados = mysqli_fetch_Array($result))
            {
                
                if($dados['codigo'] == $cpf && $dados['tipo'] == 1){
                    header('Location: ..\Telas\MenuFuncionario.php');
                }else if($dados['codigo'] == $cpf && $dados['tipo'] == 2){
                    header('Location: ..\Telas\MenuGerente.php');
                }
            }
            return false;

            mysqli_close($conn);
        } catch (Exception $erro) {
            echo "Erro: " . $erro->getMessage();
        }
    }
}
?>
