<?php
    namespace PHP\Modelo\Tela;
    require_once('..\DAO\Consultar.php');
    require_once('..\DAO\Conexao.php');
    use PHP\Modelo\DAO\Conexao;
    use PHP\Modelo\DAO\Consultar;
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
        .consultar-container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            width: 480px;
        }
        .consultar-container h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #3c5148;
        }
        .consultar-container input,
        .consultar-container select {
            width: 100%;
            padding: 8px;
            margin-top: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .consultar-container button {
            background-color: #6b8e4e;
            color: white;
            padding: 8px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }
        .consultar-container button:hover {
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
            <a class="nav-link dropdown-toggle" href="#" id="funcionalidadesDropdown" role="button" data-bs-toggle="dropdown">
                Funcionalidades
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="AtualizarFuncionario.php">Atualizar</a></li>
                <li><a class="dropdown-item" href="CadastroFuncionario.php">Cadastrar</a></li>
                <li><a class="dropdown-item" href="ExcluirFuncionario.php">Excluir</a></li>
            </ul>
        </div>
        <a href="Ajuda.php">Ajuda</a>
        <a href="EscolhaFuncionario.php" class="button-cor">Voltar</a>
    </nav>
</header>

<section class="hero">
    <div class="consultar-container"> 
        <form method="POST">
            <label>Informe um ID: </label>
            <input type = "text" name="tId" placeholder="123456" required/>
            <button type="submit">Consultar
                <?php
                    $conexao = new Conexao();
                    if(isset($_POST['tId'])){
                        $id = $_POST['tId'];
                    $consultar = new Consultar();
                    }  
                ?>
            </button>
    </form>
        <?php
            if(isset($_POST['tId'])){
            echo $consultar->consultarFuncionarioIndividual($conexao,$id);
            }else{
                echo "Preencha o campo ID";
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