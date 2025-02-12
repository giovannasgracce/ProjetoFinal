<?php
    namespace PHP\Modelo\Telas;
    require_once('..\Funcionario.php');
    require_once('..\DAO\Conexao.php');
    require_once('..\DAO\Inserir.php');
    use PHP\Modelo\Funcionario;
    use PHP\Modelo\DAO\Conexao;
    use PHP\Modelo\DAO\Inserir;
?>
 
<!DOCTYPE html>
<html lang="PT-Br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Gestão de Resíduos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="estilo.css">  

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            text-align: center;
        }
        header {
            padding: 20px;
            background-image: url('../imagens/5.2.jpg');
            background-size: cover;
            background-position: left;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        header img {
            height: 70px;
        }
        nav {
            display: flex;
            gap: 15px;
            align-items: center;
        }
        .button-cor {
            color: black;
            background-color: transparent; 
            border: 2px solid #3c5148; 
            padding: 5px 10px; 
            text-decoration: none; 
            border-radius: 5px; 
            transition: all 0.3s ease-in-out;
        }
        nav a {
            color: black;
            text-decoration: none;
            margin: 0 10px;
        }
        .button-cor:hover {
            background-color: #3c5148; 
            color: white; 
            transform: scale(1.05);
        }
        .dropdown-menu {
            text-align: left;
        }
        .hero {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 50px;
            background-image: url('../imagens/5.jpg');
            background-size: cover;
            background-position: center;
            color: #3c5148; 
            height: 800px;
        }
       
        .atualizar-container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            width: 550px;
        }
        .atualizar-container h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #3c5148;
        }
        .atualizar-container input,
        .atualizar-container select {
            width: 100%;
            padding: 8px;
            margin-top: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .atualizar-container button {
            background-color: #6b8e4e;
            color: white;
            padding: 8px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }
        .atualizar-container button:hover {
            background-color: #2a3c38;
        }
        footer {
            
            background-color: #1b2727;
            color: white;
            padding: 10px;
        }
        .atualizar-container h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #3c5148;
        }
    </style>
</head>
<body>
<header>
    <img src="../imagens/senac-logo-removebg-preview.png" alt="Logo SENAC">
    <nav>
        <div class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="funcionalidadesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Funcionalidades
            </a>
            <ul class="dropdown-menu" aria-labelledby="funcionalidadesDropdown">
                <li><a class="dropdown-item" href="ConsultarFuncionario.php">Consultar</a></li>
                <li><a class="dropdown-item" href="AtualizarFuncionario.php">Atualizar</a></li>
                <li><a class="dropdown-item" href="ExcluirFuncionario.php">Excluir</a></li>
            </ul>
        </div>
        <a href="Ajuda.php">Ajuda</a>
        <a href="EscolhaFuncionario.php" class="button-cor">Voltar</a>
    </nav>
</header>
<section class="hero">
    <div class="atualizar-container">
         <h2>Cadastro</h2>
        <form method="POST">
        <div class="mb-3">
                <label for="lTipo" class="form-label">Selecione 1- Funcionário e 2-Gerente:</label>
                <select class="form-select" id="tTipo" name="tTipo" required>
                    <option value="1">1 - Funcionário</option>
                    <option value="2">2 - Gerente</option>
                </select>
        </div>    
        <div class="mb-3">
            <label for="lNome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="tNome" name="tNome" placeholder="Insira seu nome" required>
        </div>
        <div class="mb-3">
            <label for="lTelefone" class="form-label">Telefone</label>
            <input type="text" class="form-control" id="tTelefone" name="tTelefone" placeholder="(xx) xxxxx-xxxx" required>
        </div>
        <div class="mb-3">
        <label for="lInstituicao" class="form-label">Instituição</label>
        <input type="text" class="form-control" id="tInstituicao" name= "tInstituicao" placeholder="Universidade de São Paulo (USP)" required>
        </div>
        <div class="mb-3">
            <label for="lCargo" class="form-label">Cargo</label>
            <input type="text" class="form-control" id="tCargo" name="tCargo" placeholder="Insira o Cargo" required>
        </div>
        <div class="mb-3">
            <label for="lSenha" class="form-label">Insira a senha</label>
            <input type="text" class="form-control" id="tSenha" name="tSenha" placeholder="Insira a senha" required>
        </div>
    
        <button type="submit">Cadastrar
            <?php
                $conexao = new Conexao();//conectar no banco

                if(isset($_POST['tNome']) ){
                    $tipo = $_POST['tTipo'];
                    $nome = $_POST['tNome'];
                    $telefone = $_POST['tTelefone'];
                    $instituicao = $_POST['tInstituicao'];
                    $cargo = $_POST['tCargo'];
                    $senha = $_POST['tSenha'];
                //Instaciar
                $inserir = new Inserir();
                echo $inserir->cadastrarFuncionario($conexao,$tipo,$nome,$telefone,$instituicao,$cargo,$senha);
            }
            ?>
        </button>
        </form>
    </div>
</section>

<footer>
    <p>&copy; 2025 Sistema de Gestão de Resíduos do Senac - Todos os direitos reservados.</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
 