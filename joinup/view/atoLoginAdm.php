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
        header("Location: indexAdm.php");
    } else {
        echo "Credenciais de login incorretas. Tente novamente.";
    }

    $stmt->closeCursor();
    $conn = null; 
}
?>