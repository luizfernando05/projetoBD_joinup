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
        <div class="container" id="cadEmpSucesso">
            <h1 class="font-1-l color-c12">Cadastro realizado com sucesso!</h1>
            <p class="font-1-m color-c12">A empresa ou oportunidade foi cadastrada com sucesso em nosso sistema.</p>
            <a href="./indexAdm.php" class="btn">Voltar para a página principal</a>
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