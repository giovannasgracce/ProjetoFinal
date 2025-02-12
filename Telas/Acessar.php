<?php
    namespace PHP\Modelo\Tela;
    require_once('..\DAO\Login.php');
    require_once('..\DAO\Conexao.php');
    use PHP\Modelo\DAO\Conexao;
    use PHP\Modelo\DAO\Login;
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Gestão de Resíduos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            text-align: center;
        }
        header {
            background-image: url('../imagens/3.jpg');
            padding: 20px;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        header img {
            height: 70px;
        }
        nav a {
            color: black;
            text-decoration: none;
            margin: 0 10px;
        }
        .hero {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 50px;
            background-image: url('../imagens/3.jpg'); 
            background-size: cover; 
            background-position: center; 
            color:#3c5148; 
            height: 530px; 
        }
        .login-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }
        .login-container h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #3c5148;
        }
        .login-container input {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .login-container button {
            width: 100%;
            padding: 10px;
            color:#3c5148; 
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .button-cor {
        color: black;
        background-color: transparent; 
        border: 2px solid #3c5148; 
        padding: 5px 10px; /
        text-decoration: none; 
        border-radius: 5px; 
        }
        .cor-button {
        background-color: #6b8e4e; 
        color: white; 
        border: none; 
        border-radius: 4px; 
        padding: 10px; 
        width: 100%; 
    }
    .cor-button:hover {
            background-color: #2a3c38;
        }
    </style>
</head>
<body>
<header>
        <img src="../imagens/senac-logo-removebg-preview.png" alt="Logo SENAC">
        <nav>
            <a href="Index.php" class="button-cor">Voltar</a>
        </nav>
    </header>
    <section class="hero">
    <div class="login-container">
        <h2>Login</h2>
        <form  method="POST">
            <input type="text" name="tId" placeholder="Digite seu ID" required>
            <input type="text" name="tSenha" placeholder="Digite sua senha" required>
            <button type="submit" class = "cor-button">Entrar
                <?php
                if(isset($_POST['tId']) && isset($_POST['tSenha'])){
                    $conexao = new Conexao();    
                    $login = new Login();
                    if($login->loginPessoa($conexao, $_POST['tId'], $_POST['tSenha'])==false){
                        echo "Algo deu errado!";
                    }                   

                }  
            ?>
            </button>
        </form>
   </div> 
    </section>
    
 
</body>
</html>
