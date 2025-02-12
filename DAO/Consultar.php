<?php
namespace PHP\Modelo\DAO;
require_once('Conexao.php');
use PHP\Modelo\DAO\Conexao;

class Consultar {
    function consultarResidous(Conexao $conexao, int $id) {
        try {
            $conn = $conexao->conectar();
            $sql  = "SELECT * FROM residuos WHERE id = '$id'";
            $result = mysqli_query($conn, $sql);
            
            // Verificar se há resultados
            if (mysqli_num_rows($result) > 0) {
                // Inicia a tabela HTML
                $tabela = "<table class='table table-bordered'>";
                $tabela .= "<thead>
                                <tr>
                                    <th>Código</th>
                                    <th>Peso</th>
                                    <th>Data</th>
                                    <th>Classificação</th>
                                    <th>Instituição Atual</th>
                                    <th>Instituição Destino</th>
                                </tr>
                            </thead><tbody>";
                
                // Preencher a tabela com os dados
                while ($dados = mysqli_fetch_array($result)) {
                    $tabela .= "<tr>";
                    $tabela .= "<td>" . htmlspecialchars($dados['id']) . "</td>";
                    $tabela .= "<td>" . htmlspecialchars($dados['peso']) . "</td>";
                    $tabela .= "<td>" . htmlspecialchars($dados['Dt']) . "</td>";
                    $tabela .= "<td>" . htmlspecialchars($dados['classificacao']) . "</td>";
                    $tabela .= "<td>" . htmlspecialchars($dados['atual']) . "</td>";
                    $tabela .= "<td>" . htmlspecialchars($dados['instituicao']) . "</td>";
                    $tabela .= "</tr>";
                }
                
                // Fecha a tabela
                $tabela .= "</tbody></table>";
                
                return $tabela;
            } else {
                return "<p>Nenhum dado encontrado.</p>";
            }
        } catch (Exception $erro) {
            echo $erro;
        }
    }


       



        function consultarFuncionarioIndividual(Conexao $conexao,int $id)        
       {
            try{
                $conn = $conexao->conectar();
                $sql  = "select * from Funcionario where id = '$id'";
                $result = mysqli_query($conn,$sql);
                // Verificar se há resultados
                if (mysqli_num_rows($result) > 0) {
                    // Inicia a tabela HTML
                    $tabela = "<table class='table table-bordered'>";
                    $tabela .= "<thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Tipo</th>
                                        <th>Nome</th>
                                        <th>Telefone</th>
                                        <th>Instituição</th>
                                        <th>Cargo</th>
                                    </tr>
                                </thead><tbody>"; 
                    
                    // Preencher a tabela com os dados
                    while ($dados = mysqli_fetch_array($result)) {
                        $tabela .= "<tr>";
                        $tabela .= "<td>" . htmlspecialchars($dados['id']) . "</td>";
                        $tabela .= "<td>" . htmlspecialchars($dados['tipo']) . "</td>";
                        $tabela .= "<td>" . htmlspecialchars($dados['nome']) . "</td>";
                        $tabela .= "<td>" . htmlspecialchars($dados['telefone']) . "</td>";
                        $tabela .= "<td>" . htmlspecialchars($dados['instituicao']) . "</td>";
                        $tabela .= "<td>" . htmlspecialchars($dados['cargo']) . "</td>";
                        $tabela .= "</tr>";
                    }
                    
                    // Fecha a tabela
                    $tabela .= "</tbody></table>";
                    
                    return $tabela;
                } else {
                    return "<p>Nenhum dado encontrado.</p>";
                }
            } catch (Exception $erro) {
                echo $erro;
            }
               
    }//fim do método
    }//fim da classe
?>


