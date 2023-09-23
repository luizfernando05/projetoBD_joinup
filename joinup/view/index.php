<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JoinUp</title>

    <link rel="stylesheet" href="./css/style.css">

    <link rel="icon" href="./images/favincon.png" type="image/x-icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Roboto:wght@400;500&display=swap" rel="stylesheet">
</head>
<body>
    <header class="container">
        <div class="header-all-bg">
            <a href="./index.html"><img src="./images/logoPrimary.svg" alt="Logo da JoinUp."></a>

            <ul class="nav-all">
                <li><a href="./" class="font-1-m-b color-c12">oportunidades</a></li>

                <li><a href="./" class="font-1-m-b color-c12">empresas</a></li>
            </ul>
        </div>
    </header>

    <main>
        <div  class="container">
            <div id="main-content">
                <div id="card1">
                    <h1 class="font-1-xxl color-p5">busque a melhor oportunidade para o seu primeiro emprego</h1>
    
                    <p class="font-2-s color-p5">Encontre a vaga de estágio que você sempre sonhou e se insira de fato no mercado de trabalho, aqui você encontrará uma seleção das melhores oportunidades de estágio disponíveis.</p>
                </div>
    
                <div id="card2">
                    <img src="./images/mainImage.svg" alt="Figura de uma mulher como se estivesse presetes a falar algo.">
                </div>
            </div>
        </div>
    </main>

    <section id="parceiros">
        <div id="main-parceiros" class="container">
            <h2 class="font-1-xl color-c12">empresas parceiras:</h2>

            <div id="list-parceiros">
                <div>
                    <img src="./images/parceiros/clean.svg" alt="logo">
                </div>

                <div>
                    <img src="./images/parceiros/eventoConnect.svg" alt="logo">
                </div>

                <div>
                    <img src="./images/parceiros/woww.svg" alt="logo">
                </div>

                <div>
                    <img src="./images/parceiros/marbelo.svg" alt="logo">
                </div>

                <div>
                    <img src="./images/parceiros/simpli.svg" alt="logo">
                </div>

                <div>
                    <img src="./images/parceiros/triplus.svg" alt="logo">
                </div>
            </div>
        </div>
    </section>
    
    <section id="oportunidades">
    <div class="container">
        <h2 class="font-1-xl color-c12">vagas disponíveis:</h2>

        <div class="cards-oportunidades">

        <?php
        include_once('../model/config.php');

        try {
            $query1 = "
            SELECT o.nomeoportunidade, e.nomeempresa, t.tipo, o.cidade, o.estado, o.datainicio, o.datafim, e.setorempresa, e.emailempresa, e.telefoneempresa, o.linkins, string_agg(r.requisito, ', ') AS requisitos
            FROM sistema.oporemp AS oe
            INNER JOIN sistema.oportunidade AS o ON oe.idoportunidade = o.idoportunidade
            INNER JOIN sistema.empresa AS e ON oe.cnpjempresa = e.cnpjempresa
            INNER JOIN sistema.tipooportunidade AS t ON o.idoportunidade = t.idoportunidade
            LEFT JOIN sistema.requisitooportunidade AS r ON o.idoportunidade = r.idoportunidade
            GROUP BY o.nomeoportunidade, e.nomeempresa, t.tipo, o.cidade, o.estado, o.datainicio, o.datafim, e.setorempresa, e.emailempresa, e.telefoneempresa, o.linkins;
            ";

            $stmt1 = $conn->query($query1);

            while ($row = $stmt1->fetch(PDO::FETCH_ASSOC)) {
                echo '<div class="card-opor">';
                echo '<h3 class="font-1-m-b color-c12">' . $row['nomeoportunidade'] . '</h3>';
                echo '<div class="info-gerais">';
                echo '<span class="font-1-xs color-c12">' . $row['nomeempresa'] . '</span>';
                echo '<span class="font-1-xs color-c12">' . $row['tipo'] . '</span>';
                echo '<span class="font-1-xs color-c12">' . $row['cidade'] . ', ' . $row['estado'] . '</span>';
                echo '</div>';
                echo '<div class="cards-opor-info">';
                echo '<div class="opor-preRequi">';
                echo '<h4 class="font-1-s color-c12">Pré-requisitos:</h4>';
                echo '<span class="font-2-xs color-c12">' . $row['requisitos'] . '</span>';
                echo '</div>';
                echo '<div class="opor-datas">';
                echo '<h4 class="font-1-s color-c12">Datas da seleção:</h4>';
                echo '<span class="font-2-xs color-c12">Início da seleção: ' . $row['datainicio'] . '</span>';
                echo '<span class="font-2-xs color-c12">Fim da seleção: ' . $row['datafim'] . '</span>';
                echo '</div>';
                echo '<div class="info-emp">';
                echo '<h4 class="font-1-s color-c12">Informações da empresa:</h4>';
                echo '<span class="font-2-xs color-c12">Área de atuação: ' . $row['setorempresa'] . '</span>';
                echo '<span class="font-2-xs color-c12">E-mail para contato: ' . $row['emailempresa'] . '</span>';
                echo '<span class="font-2-xs color-c12">Telefone para contato: ' . $row['telefoneempresa'] . '</span>';
                echo '</div>';
                echo '<a class="btn" href="' . $row['linkins'] . '">CANDIDATAR-SE</a>';
                echo '</div>';
                echo '</div>';
            }
        } catch (PDOException $e) {
            echo "Erro na consulta: " . $e->getMessage();
        }
        ?>
        </div>

    </div>
</section>

</body>
</html>