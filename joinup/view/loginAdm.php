<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Administrador | joinup.admin</title>

    <link rel="stylesheet" href="./css/style.css">

    <link rel="icon" href="./images/favincon.png" type="image/x-icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
</head>

<body>
    <header class="header-adm-bg">
        <div class="container">
            <div class="logo-adm"><a href="./loginAdm.html"><img src="./images/logoAdm.svg" alt="Logo JoinUp Administrador"></a></div>
        </div>
    </header>

    <section id="login-adm">
        <div class="container" id="form-login-adm-bg">
            <form id="form-login-adm" action="../controller/atoLoginAdm.php" method="post">

                <!-- Recebe e verifica o atributo do banco de dados usuarioAdm, da tabela sistema.administrador -->
                <label class="font-1-s" for="usuarioAdm">Nome de usuário:</label>
                <input type="text" id="usuarioAdm" name="usuarioAdm" required>
    
                <!-- Recebe e verifica o atributo do banco de dados senhaAdm, da tabela sistema.administrador -->
                <label class="font-1-s" for="senhaAdm">Senha:</label>
                <input type="password" id="senhaAdm" name="senhaAdm" required>
                
                <button id="btn-login-adm" class="btn" type="submit">Fazer Login</button>
    
            </form>
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