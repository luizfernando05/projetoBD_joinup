<?php
include_once('../model/config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        $conn = new PDO("pgsql:host=$db_host;port=$db_port;dbname=$db_name;user=$db_user;password=$db_password");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $nomeOportunidade = $_POST['nomeOportunidade'];
        $cep = $_POST['cep'];
        $estado = $_POST['estado'];
        $cidade = $_POST['cidade'];
        $dataInicio = $_POST['dataInicio'];
        $dataFim = $_POST['dataFim'];
        $linkIns = $_POST['linkIns'];
        $usuarioAdm = $_POST['usuarioAdm'];
        $tipo = $_POST['tipo'];
        $requisitos = $_POST['requisitos'];
        $cnpjEmpresa = $_POST['cnpjEmpresa'];

        // Inserir dados na tabela oportunidade
        $queryOportunidade = "INSERT INTO sistema.oportunidade (nomeOportunidade, cep, estado, cidade, dataInicio, dataFim, linkIns, usuarioAdm)
            VALUES (:nomeOportunidade, :cep, :estado, :cidade, :dataInicio, :dataFim, :linkIns, :usuarioAdm)";
        $stmtOportunidade = $conn->prepare($queryOportunidade);
        $stmtOportunidade->bindParam(':nomeOportunidade', $nomeOportunidade);
        $stmtOportunidade->bindParam(':cep', $cep);
        $stmtOportunidade->bindParam(':estado', $estado);
        $stmtOportunidade->bindParam(':cidade', $cidade);
        $stmtOportunidade->bindParam(':dataInicio', $dataInicio);
        $stmtOportunidade->bindParam(':dataFim', $dataFim);
        $stmtOportunidade->bindParam(':linkIns', $linkIns);
        $stmtOportunidade->bindParam(':usuarioAdm', $usuarioAdm);
        $stmtOportunidade->execute();

        // Obtenha o ID gerado automaticamente pelo banco de dados
        $idOportunidade = $conn->lastInsertId();

        // Inserir dados na tabela oporEmp (relação entre oportunidade e empresa)
        $queryOporEmp = "INSERT INTO sistema.oporEmp (cnpjEmpresa, idOportunidade)
            VALUES (:cnpjEmpresa, :idOportunidade)";
        $stmtOporEmp = $conn->prepare($queryOporEmp);
        $stmtOporEmp->bindParam(':cnpjEmpresa', $cnpjEmpresa);
        $stmtOporEmp->bindParam(':idOportunidade', $idOportunidade);
        $stmtOporEmp->execute();

        // Inserir dados nas tabelas tipoOportunidade e requisitosOportunidade
        $tipos = explode(',', $tipo);
        $requisitos = explode(',', $requisitos);

        foreach ($tipos as $tipo) {
            $tipo = trim($tipo);
            if (!empty($tipo)) {
                inserirTipo($conn, $idOportunidade, $tipo);
            }
        }

        foreach ($requisitos as $requisito) {
            $requisito = trim($requisito);
            if (!empty($requisito)) {
                inserirRequisito($conn, $idOportunidade, $requisito);
            }
        }

        $conn = null;
        header("Location: ../view/cadastroSucesso.php");
        exit();
    } catch (PDOException $e) {
        die("Erro na conexão com o banco de dados: " . $e->getMessage());
    }
}

function inserirTipo($conn, $idOportunidade, $tipo) {
    // Consulta SQL para inserir na tabela tipoOportunidade
    $queryTipoOportunidade = "INSERT INTO sistema.tipoOportunidade (tipo, idOportunidade) VALUES (:tipo, :idOportunidade)";
    $stmtTipoOportunidade = $conn->prepare($queryTipoOportunidade);
    $stmtTipoOportunidade->bindParam(':tipo', $tipo);
    $stmtTipoOportunidade->bindParam(':idOportunidade', $idOportunidade);
    $stmtTipoOportunidade->execute();
}

function inserirRequisito($conn, $idOportunidade, $requisito) {
    // Consulta SQL para inserir na tabela requisitoOportunidade
    $queryRequisitoOportunidade = "INSERT INTO sistema.requisitoOportunidade (requisito, idOportunidade) VALUES (:requisito, :idOportunidade)";
    $stmtRequisitoOportunidade = $conn->prepare($queryRequisitoOportunidade);
    $stmtRequisitoOportunidade->bindParam(':requisito', $requisito);
    $stmtRequisitoOportunidade->bindParam(':idOportunidade', $idOportunidade);
    $stmtRequisitoOportunidade->execute();

}
?>