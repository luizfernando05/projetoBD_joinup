<?php
include_once('../model/config.php');

function cadastrar_empresa($nome, $cnpj, $setor, $email, $telefone) {
    global $conn;

    try {
        $query = "INSERT INTO sistema.empresa (cnpjEmpresa, nomeEmpresa, setorEmpresa, emailEmpresa, telefoneEmpresa) VALUES (:cnpj, :nome, :setor, :email, :telefone)";
        $stmt = $conn->prepare($query);

        $stmt->bindParam(':cnpj', $cnpj, PDO::PARAM_STR);
        $stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
        $stmt->bindParam(':setor', $setor, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':telefone', $telefone, PDO::PARAM_INT);

        $stmt->execute();

        return true;
    } catch (PDOException $e) {
        return "Erro na conexão com o banco de dados: " . $e->getMessage();
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nomeEmpresa"];
    $cnpj = $_POST["cnpjEmpresa"];
    $setor = $_POST["setorEmpresa"];
    $email = $_POST["emailEmpresa"];
    $telefone = $_POST["telefoneEmpresa"];

    $resultado = cadastrar_empresa($nome, $cnpj, $setor, $email, $telefone);

    if ($resultado === true) {
        header("Location: ./cadastroSucesso.php");
        exit();
    } else {
        header("Location: cadastro_erro.php?mensagem=" . urlencode($resultado));
        exit();
    }
}
?>