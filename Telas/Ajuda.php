<?php
    namespace PHP\Modelo\Telas;
    require_once('..\DAO\Conexao.php');
    require_once('..\DAO\Inserir.php');
    use PHP\Modelo\DAO\Conexao;
    use PHP\Modelo\DAO\Inserir;
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Gestão de Resíduos</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        text-align: center;
        background-color: #f4f4f4;
    }
    header {
        background-image: url('../imagens/3.jpg'); /* Imagem de fundo */
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
        background-image: url('../imagens/3.jpg'); /* Imagem de fundo */
        background-size: cover;
        background-position: center;
        height: 530px;
    }


    .form-container {
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 500px;
        margin: 50px auto;
        display: flex;
        flex-direction: column;
        align-items: center; 
    }

    .form-container h2 {
        text-align: center;
        margin-bottom: 20px;
        color: #3c5148;
    }

    .form-container form {
        width: 100%; 
    }

    .form-container label {
        font-weight: bold;
        display: block;
        margin-top: 10px;
        text-align: left;
    }

    .form-container input,
    .form-container textarea {
        width: 100%;
        padding: 10px;
        margin-top: 5px;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-size: 16px;
        box-sizing: border-box; 
    }

  
    .form-container button {
        width: 100%;
        padding: 10px;
        background-color: #6b8e4e;
        color: white;
        border: none;
        border-radius: 4px;
        font-size: 16px;
        margin-top: 15px;
        cursor: pointer;
        transition: 0.3s;
    }
    .form-container button :hover {
            background-color: #2a3c38;
        }

    .button-cor {
        color: black;
        background-color: transparent; 
        border: 2px solid #3c5148; 
        padding: 5px 10px; /
        text-decoration: none; 
        border-radius: 5px; 
        }

    footer {
        background-color: #1b2727;
        color: white;
        padding: 10px;
    }
    footer a {
        color: white;
        text-decoration: none;
        margin: 0 10px;
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
    <div class="form-container">
        <h2>Envie sua dúvida</h2>
        <form method="POST">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>

            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required>

            <label for="duvida">Dúvida:</label>
            <textarea id="duvida" name="duvida" rows="4" required></textarea>

            <button type="submit">Enviar
            <?php
                $conexao = new Conexao();//conectar no banco

                if(isset($_POST['email']) && isset($_POST['nome']) ){
                    $nome = $_POST['nome'];
                    $email = $_POST['email'];
                    $duvida = $_POST['duvida'];
                //Instaciar
                $inserir = new Inserir();
                echo $inserir->cadastrarDuvidas($conexao,$nome,$email,$duvida);
            }
            ?>
        </button>
        </form>
    </div>
    </section>
    <footer>
        <p>&copy; 2025 Sistema de Gestão de Resíduos do Senac - Todos os direitos reservados.</p>
    </footer>
</body>
</html>