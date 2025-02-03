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
        }
        header {
            background-color:#f8f5ee;
            padding: 20px;
            background-image: url('../imagens/oficial - Copia.jpg'); /* Imagem de fundo */
            background-size: cover; /* Cobrir toda a área */
            background-position: left; /* Centralizar a imagem */
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
            background-image: url('../imagens/oficial.jpg'); /* Imagem de fundo */
            background-size: cover; /* Cobrir toda a área */
            background-position: center; /* Centralizar a imagem */
            color: white; /* Cor do texto para contraste */
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); /* Sombra no texto para melhor legibilidade */
            height: 530px; /* Altura da seção hero */
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
        .button-cor {
        color: black;
        background-color: transparent; 
        border: 2px solid #3c5148; 
        padding: 5px 10px; 
        text-decoration: none; 
        border-radius: 5px; 
        transition: all 0.3s ease-in-out; /* Suaviza a transição */
    }

    .button-cor:hover {
        background-color: #3c5148; 
        color: white; 
        transform: scale(1.05); /* Aumenta um pouco o botão */
    }


    </style>
</head>
<body>
    <header>
        <img src="../imagens/senac-logo-removebg-preview.png" alt="Logo SENAC">
        <nav>
            <a href="Ajuda.php" class="">Ajuda</a>
            <a href="Acessar.php" class="button-cor">Login</a>

        </nav>
    </header>

    <section class="hero">

    </section>

    <footer>
        <p>&copy; 2025 Sistema de Gestão de Resíduos do Senac - Todos os direitos reservados.</p>
    </footer>
</body>
</html>