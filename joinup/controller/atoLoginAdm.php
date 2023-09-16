<?php
include_once('../model/config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuarioAdm = $_POST["usuarioAdm"];
    $senhaAdm = $_POST["senhaAdm"];

    $query = "SELECT usuarioAdm FROM sistema.administrador WHERE usuarioAdm = :usuarioAdm AND senhaAdm = :senhaAdm";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':usuarioAdm', $usuarioAdm, PDO::PARAM_STR);
    $stmt->bindParam(':senhaAdm', $senhaAdm, PDO::PARAM_STR);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        // Inicie a sessão e defina a variável de sessão 'usuarioAdm'
        session_start();
        $_SESSION['usuarioAdm'] = $usuarioAdm;

        // Redirecione o usuário para a página de administração
        header("Location: ../view/indexAdm.php");
        exit(); // Certifique-se de sair após o redirecionamento para evitar execução adicional do código
    } else {
        echo "Credenciais de login incorretas. Tente novamente.";
    }

    $stmt->closeCursor();
    $conn = null; 
}
?>