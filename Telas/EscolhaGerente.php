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
            background-image: url('../imagens/3.jpg'); 
            background-size: cover;
            background-position: left;
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
            background-image: url('../imagens/menu.jpg'); 
            background-size: cover;
            background-position: center;
            color: white;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            height: 530px;
        }

        /* Ajuste para manter os cartões sempre organizados em 2 fileiras com 2 colunas */
        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            max-width: 600px;
            margin: 50px auto;
        }
        .card {
            background-color: #1B2727;
            color: white;
            padding: 20px;
            border-radius: 10px;
            width: 250px;
            height: 180px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s;
        }
        .card:hover {
            transform: scale(1.05);
        }
        .card h3 {
            text-align: center;
            margin-bottom: 10px;
            color: #b2c5b2;
        }
        .card p {
            font-size: 14px;
            margin: 10px 0;
        }
        .btn {
           background-color: #6b8e4e;
            color: white;
            padding: 8px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s; 
            text-decoration: none;
        }
        .btn:hover {
            background-color: #2a3c38;
            color: white; 
            transform: scale(1.05); 
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
            transition: all 0.3s ease-in-out; 
        }
        .button-cor:hover {
            background-color: #3c5148; 
            color: white; 
            transform: scale(1.05); 
        }
    </style>
</head>
<body>
    <header>
        <img src="../imagens/senac-logo-removebg-preview.png" alt="Logo SENAC">
        <nav>
            <a href="Ajuda.php">Ajuda</a>
            <a href="MenuGerente.php">Voltar</a>
            <a href="Index.php" class="button-cor" onclick="return confirm('Tem certeza que deseja sair?')">Sair</a>
        </nav>
    </header>

    <section class="hero">
        <div class="container">
            <div class="card">
                <h3>Excluir</h3>
                <p>Clique aqui para remover dados quando necessário.</p>
                <a href="ExcluirG.php" class="btn">Acessar</a>
            </div>
            <div class="card">
                <h3>Cadastrar</h3>
                <p>Adicione novas informações facilmente.</p>
                <a href="CadastroResiduos.php" class="btn">Acessar</a>
            </div>
            <div class="card">
                <h3>Atualizar</h3>
                <p>Atualize suas informações de forma rápida e prática.</p>
                <a href="AtualizarResiduos.php" class="btn">Acessar</a>
            </div>
            <div class="card">
                <h3>Visualizar</h3>
                <p>Veja e acesse os dados registrados aqui</p>
                <a href="ConsultarResiduos.php" class="btn">Acessar</a>
            </div>
        </div>
    </section>

    <footer>
        <p>&copy; 2025 Sistema de Gestão de Resíduos do Senac - Todos os direitos reservados.</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
