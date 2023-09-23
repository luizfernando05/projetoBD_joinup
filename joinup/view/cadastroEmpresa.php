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
    <title>Cadastro de Empresa | joinup.admin</title>

    <link rel="stylesheet" href="./css/style.css">

    <link rel="icon" href="./images/favincon.png" type="image/x-icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
</head>

<body>
    <header class="header-adm-bg">
        <div class="container">
            <div class="logo-adm"><a href="./telaLoginAdm.html"><img src="./images/logoAdm.svg" alt="Logo JoinUp Administrador"></a></div>
        </div>
    </header>

    <section>
        <div class="container"  id="cadEmp">
            <h1 class="font-1-l color-c12">Cadastro de empresa:</h1>
                <form id="form-cad-infoEmp" action="../controller/processaCadEmp.php" method="post">

                    <div id="cadInfoEmp">
                        <span class="font-2-xs color-c12">Informações sobre a empresa:</span>

                        <!-- Envia para o banco de dados o valor referente ao atributo "nomeEmpresa" da tabela sistema.empresa-->
                        <label class="font-1-s color-c12" for="nomeEmpresa">Insira o nome da empresa:</label>
                        <input type="text" id="nomeEmpresa" name="nomeEmpresa" required>

                        <!-- Envia para o banco de dados o valor referente ao atributo "cnpjEmpresa" da tabela sistema.empresa-->
                        <label class="font-1-s color-c12" for="cnpjEmpresa">Insira o cnpj da empresa:</label>
                        <input type="number" id="cnpjEmpresa" name="cnpjEmpresa" required>

                        <!-- Envia para o banco de dados o valor referente ao atributo "setorEmpresa" da tabela sistema.empresa-->
                        <label class="font-1-s color-c12" for="setorEmpresa">Insira o setor de atuação da empresa:</label>
                        <input type="text" id="setorEmpresa" name="setorEmpresa" required>
                    </div>

                    <div id="cadInfoContEmp">
                        <span class="font-2-xs color-c12">Informações de contato da empresa:</span>

                        <!-- Envia para o banco de dados o valor referente ao atributo "emailEmpresa" da tabela sistema.empresa-->
                        <label class="font-1-s color-c12" for="emailEmpresa">Insira o e-mail de contato da empresa:</label>
                        <input type="text" id="emailEmpresa" name="emailEmpresa" required>
    
                        <!-- Envia para o banco de dados o valor referente ao atributo "telefoneEmpresa" da tabela sistema.empresa-->
                        <label class="font-1-s color-c12" for="telefoneEmpresa">Insira o telefone de contato da empresa:</label>
                        <input type="number" id="telefoneEmpresa" name="telefoneEmpresa" required>
                    </div>

                    <button id="btn-login-adm" class="btn" type="submit">Cadastrar</button>
                </form>
            </div>
        </div>
    </section>

    <footer>
        <div class="content-foot">
            <div id="logo-text">
                <a href="./loginAdm.php"><img src="./images/logoAdm-text.svg" alt="Logo da JoinUp em versão de texto"></a>
            </div>

            <div id="text-foot">
                <span class="font-1-xs color-c2">© joinup, 2023. Todos os direitos reservados.</span>
                <img src="./images/logoLuizFernandov1.svg" alt="">
            </div>
        </div>
    </footer>

</body>
</html>