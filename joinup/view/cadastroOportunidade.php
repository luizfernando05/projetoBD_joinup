<?php
    session_start();

    if (!isset($_SESSION['usuarioAdm'])) {
        header("Location: loginAdm.php");
        exit();
    }

    include_once('../model/config.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Oportunidade | joinup.admin</title>

    <link rel="stylesheet" href="./css/style.css">

    <link rel="icon" href="./images/favincon.png" type="image/x-icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
</head>

<body>
    <header class="header-adm-bg">
        <div class="container">
            <div class="logo-adm"><a href="./telaLoginAdm.html"><img src="./images/logoAdm.svg"" alt="Logo JoinUp Administrador"></a></div>
        </div>
    </header>

    <section>
        <div class="container"  id="cadOportunidade">
            <h1 class="font-1-l color-c12">Cadastro de Oportunidade:</h1>
                <form id="form-cad-oportunidade" action="../controller/processaCadOpo.php" method="post">

                    <div id="cadInfoOportunidade">

                        <!-- Nome da oportunidade -->
                        <label class="font-1-s color-c12" for="nomeOportunidade">Nome da oportunidade:</label>
                        <input type="text" id="nomeOportunidade" name="nomeOportunidade" required>

                        <!-- CEP -->
                        <label class="font-1-s color-c12" for="cep">CEP:</label>
                        <input type="text" id="cep" name="cep">

                        <!-- Estado -->
                        <label class="font-1-s color-c12" for="estado">Estado:</label>
                        <input type="text" id="estado" name="estado">

                        <!-- Cidade -->
                        <label class="font-1-s color-c12" for="cidade">Cidade:</label>
                        <input type="text" id="cidade" name="cidade" >

                        <!-- Data de Início -->
                        <label class="font-1-s color-c12" for="dataInicio">Data de Início:</label>
                        <input type="date" id="dataInicio" name="dataInicio" required>

                        <!-- Data de Término -->
                        <label class="font-1-s color-c12" for="dataFim">Data de Término:</label>
                        <input type="date" id="dataFim" name="dataFim" required>

                        <!-- Link de Inscrição -->
                        <label class="font-1-s color-c12" for="linkIns">Link de Inscrição:</label>
                        <input type="text" id="linkIns" name="linkIns" required>

                        <!-- Tipo de Oportunidade -->
                        <label class="font-1-s color-c12" for="tipo">Tipo de Oportunidade (separe por vírgula, se houver mais de um):</label>
                        <input type="text" id="tipo" name="tipo" required>

                        <!-- Requisitos da Oportunidade -->
                        <label class="font-1-s color-c12" for="requisitos">Requisitos da Oportunidade (separe por vírgula, se houver mais de um):</label>
                        <input type="text" id="requisitos" name="requisitos">

                        <!-- CNPJ da Empresa -->
                        <label class="font-1-s color-c12" for="cnpjEmpresa">CNPJ da Empresa:</label>
                        <input type="text" id="cnpjEmpresa" name="cnpjEmpresa" required>

                        <!-- Usuário Administrador -->
                        <label class="font-1-s color-c12" for="usuarioAdm">Usuário Administrador:</label>
                        <input type="text" id="usuarioAdm" name="usuarioAdm" required>
                    </div>

                    <button id="btn-cad-oportunidade" class="btn" type="submit">Cadastrar Oportunidade</button>
                </form>
            </div>
        </div>
    </section>

    <footer>
        <div class="content-foot">
            <div id="logo-text">
                <a href="./loginAdm.html"><img src="./images/logoAdm-text.svg" alt="Logo da JoinUp em versão de texto"></a>
            </div>

            <div id="text-foot">
                <span class="font-1-xs color-c2">© joinup, 2023. Todos os direitos reservados.</span>
                <img src="./images/logoLuizFernandov1.svg" alt="">
            </div>
        </div>
    </footer>

</body>
</html>
