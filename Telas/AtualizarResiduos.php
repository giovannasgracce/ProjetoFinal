<?php
    namespace PHP\Modelo\Tela;
    require_once('../DAO/Conexao.php');
    require_once('../DAO/Atualizar.php');

    use PHP\Modelo\DAO\Conexao;
    use PHP\Modelo\DAO\Atualizar;

    $conexao = new Conexao();
    $atualizar = new Atualizar();
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
            height: 690px;
        }
        .atualizar-container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            width: 380px;
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
            <a class="nav-link dropdown-toggle" href="#" id="funcionalidadesDropdown" role="button" data-bs-toggle="dropdown">
                Funcionalidades
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="ConsultarResiduos.php">Consultar</a></li>
                <li><a class="dropdown-item" href="CadastroResiduos.php">Cadastrar</a></li>
                <li><a class="dropdown-item" href="ExcluirResidous.php">Excluir</a></li>
            </ul>
        </div>
        <a href="Ajuda.php">Ajuda</a>
        <a href="MenuFuncionario.php" class="button-cor">Voltar</a>
    </nav>
</header>

<section class="hero">
    <div class="atualizar-container">
        <form method="POST">
            <label>Informe a Instituição: </label>
            <input type="text" name="tInstituicao" placeholder="Universidade de São Paulo (USP)" required/><br><br>

            <label >CPF:</label>
            <input type="text"  name= "tCpf" placeholder="000.000.000-00" required><br><br>

            <div class="mb-3">
                <label for="tClassificacao" class="form-label">Selecione a classificação do resíduo:</label>
                <select class="form-select" id="tClassificacao" name="tClassificacao" required>
                    <option value="nao reciclavel">Não reciclável</option>
                    <option value="reciclavel">Reciclável</option>
                    <option value="oleo">Óleo</option>
                    <option value="tampinhas plasticas">Tampinhas plásticas</option>
                    <option value="lacres de aluminio">Lacres de alumínio</option>
                    <option value="tecidos">Tecidos</option>
                    <option value="meias">Meias</option>
                    <option value="material de escrita">Material de escrita</option>
                    <option value="esponjas">Esponjas</option>
                    <option value="eletronicos">Eletrônicos</option>
                    <option value="pilhas e baterias">Pilhas e baterias</option>
                    <option value="infectante">Infectante</option>
                    <option value="quimicos">Químicos</option>
                    <option value="lampada fluorescente">Lâmpada fluorescente</option>
                    <option value="tonners de impressora">Toners de impressora</option>
                    <option value="esmaltes">Esmaltes</option>
                    <option value="cosmeticos">Cosméticos</option>
                    <option value="cartela de medicamento">Cartela de medicamento</option>
                </select>
            </div>

            <label>Informe sua atualização: </label>
            <select name="tCampo">
                <option value="cpf">CPF</option>
                <option value="peso">Peso</option>
                <option value="dt">Data</option>
                <option value="classificacao">Classificação do Resíduo</option>
                <option value="instituicao">Instituição</option>
            </select><br><br>

            <label>Insira o novo dado: </label>
            <input type="text" name="tNovoDado" placeholder="Digite o novo dado" required/><br><br>

            <button type="submit">Atualizar</button>
        </form>

        <?php
            if(isset($_POST['tInstituicao']) && isset($_POST['tCampo']) && isset($_POST['tNovoDado'])) {
                echo $atualizar->atualizarResidous($conexao, $_POST['tCampo'], $_POST['tNovoDado'], $_POST['tInstituicao'], $_POST['tClassificacao'], $_POST['tCpf']);
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
