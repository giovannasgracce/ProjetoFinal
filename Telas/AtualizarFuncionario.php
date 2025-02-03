<?php
    namespace PHP\Modelo\Tela;
    require_once('..\DAO\Conexao.php');
    require_once('..\DAO\Atualizar.php');
    use PHP\Modelo\DAO\Conexao;
    use PHP\Modelo\DAO\Atualizar;
?>
<!DOCTYPE html>
<html lang="en">
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
            height: 650px;
        }
        .atualizar-container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            width: 320px;
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
                <li><a class="dropdown-item" href="CadastroFuncionario.php">Cadastrar</a></li>
                <li><a class="dropdown-item" href="ExcluirFuncionario.php">Excluir</a></li>
            </ul>
        </div>
        <a href="Ajuda.php">Ajuda</a>
        <a href="EscolhaFuncionario.php" class="button-cor">Voltar</a>
    </nav>
</header>
<section class="hero">
    <div class="atualizar-container">
        <form method="POST">
            <label>Informe um CPF: </label>
            <input type = "text" name="tCpf" placeholder="000.000.000-00" required/><br><br>

            <div class="mb-3">
                <label for="lTipo" class="form-label">Selecione 1- Funcionario e 2-Gerente:</label>
                <select class="form-select" id="tTipo" name="tTipo" required>
                    <option value="1">1 - Funcionario</option>
                    <option value="2">2 - Gerente</option>
                </select>
            </div> 

            <label>Informe sua atualização: </label>
            <select name="tCampo">
                <option value="tipo">Tipo</option>
                <option value="nome">Nome</option>
                <option value="telefone">Telefone</option>
                <option value="instituicao">Instituição</option>
                <option value="cargo">Cargo</option>
            </select><br><br>

            <label>Novo Dado: </label>
            <input type = "text" name="tNovoDado" laceholder="Digite o novo dado" required/><br><br>

            <button type="submit">Atualizar
                <?php
                    $conexao = new Conexao();
                    if(isset($_POST['tCpf']) && isset($_POST['tTipo'])){
                    $atualizar = new Atualizar();
                        $cpf =$_POST['tCpf'];
                        $tipo = $_POST['tTipo'];
                        $campo =$_POST['tCampo'];
                        $novoDado =$_POST['tNovoDado'];

                    }  
                ?>
            </button>
        </form>
        <?php
            if(isset($_POST['tCpf'])){
                echo $atualizar->atualizarFuncionario($conexao,$campo,$novoDado,$cpf,$tipo);
            }else{
                echo "Preencha os campos vazios!";
            }
        ?>
        </div>
</section>

<footer>
    <p>&copy; 2025 Sistema de Gestão de Resíduos do Senac - Todos os direitos reservados.</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>