<?php
    namespace PHP\Modelo\DAO;
    require_once('Conexao.php');
    use PHP\Modelo\DAO\Conexao;  

    class Inserir{
        function cadastrarResidous(Conexao $conexao,
                                  string $cpf,
                                  float $peso,
                                  string $dt,
                                  string $classificacao,
                                  string $instituicao
        ){
            try{
                $conn = $conexao->conectar();//Abrir banco
                $sql = "Insert into residuos(codigo, peso, Dt, classificacao , instituicao) values('$cpf','$peso','$dt','$classificacao','$instituicao')";
                $result = mysqli_query($conn,$sql);
                mysqli_close($conn);
                //Verificar o resultado
                if($result){
                    return "<br><br>Inserido com sucesso!";
                }
                return "<br><br>Não inserido!";
            }
            catch(Except $erro)
            {
                return "<br><br>Algo deu errado".$erro;
            }
        }//fim do método

        //INICIO FUNCIONÁRIO
        function cadastrarFuncionario(Conexao $conexao,
                                        string $cpf,
                                        float $tipo,
                                        string $nome,
                                        string $telefone,
                                        string $instituicao,
                                        string $cargo
         ){
            try{
                $conn = $conexao->conectar();//Abrir banco
                $sql = "Insert into Funcionario(codigo,tipo, nome, telefone, instituicao , cargo) values('$cpf','$tipo','$nome','$telefone','$instituicao','$cargo')";
                $result = mysqli_query($conn,$sql);
                mysqli_close($conn);
                //Verificar o resultado
                if($result){
                    return "<br><br>Inserido com sucesso!";
                }
                return "<br><br>Não inserido!";
            }
            catch(Except $erro)
            {
                return "<br><br>Algo deu errado".$erro;
            }
         }//fim do método


         //SAQ
            function cadastrarDuvidas(Conexao $conexao,
                                            string $nome,
                                            string $email,
                                            string $duvida
        ){
            try{
                $conn = $conexao->conectar();//Abrir banco
                $sql = "Insert into Duvidas(nome,email, duvida) values('$nome','$email','$duvida')";
                $result = mysqli_query($conn,$sql);
                mysqli_close($conn);
                //Verificar o resultado
                if($result){
                    return "<br><br>Inserido com sucesso!";
                }
                return "<br><br>Não inserido!";
            }
            catch(Except $erro)
            {
                return "<br><br>Algo deu errado".$erro;
            }
        }//fim do método



         
    }//fim da classe
?>