<?php
namespace PHP\Modelo\DAO;
require_once('Conexao.php');
use PHP\Modelo\DAO\Conexao;

class Login {
    public function loginPessoa(Conexao $conexao, int $id, string $senha) {
        try {
            $conn = $conexao->conectar(); 
            $sql  = "select id, tipo, senha from Funcionario where id = '$id' and senha = '$senha'";
            $result = mysqli_query($conn,$sql);
            while($dados = mysqli_fetch_Array($result))
            {
                if($dados['id'] == $id && $dados['tipo'] == 1 && $dados['senha'] == $senha){
                    header('Location: ..\Telas\MenuFuncionario.php');
                }else if($dados['id'] == $id && $dados['tipo'] == 2 && $dados['senha'] == $senha){
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
