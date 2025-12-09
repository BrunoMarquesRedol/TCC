<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Troque "seubanco" pelo nome real do seu banco de dados
$conn = new mysqli("localhost", "root", "", "desenvolvetec");
if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}

$nome = $_POST['nome'] ?? '';
$email = $_POST['email'] ?? '';
$telefone = $_POST['telefone'] ?? '';
$empresa = $_POST['empresa'] ?? '';
$servicos = isset($_POST['servicos']) ? implode(', ', $_POST['servicos']) : '';
$prazo = $_POST['prazo'] ?? '';
$orcamento = $_POST['orcamento'] ?? '';
$detalhes = $_POST['detalhes'] ?? '';

// Agora, 'detalhes' é o campo obrigatório no lugar de 'mensagem'
if ($nome && $email && $telefone && $detalhes) {
    $stmt = $conn->prepare("INSERT INTO orcamentos (nome, email, telefone, empresa, servicos, prazo, orcamento, detalhes) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    if (!$stmt) {
        die("Erro no prepare: " . $conn->error);
    }
    $stmt->bind_param("ssssssss", $nome, $email, $telefone, $empresa, $servicos, $prazo, $orcamento, $detalhes);
    if ($stmt->execute()) {
        echo "ok";
    } else {
        die("Erro ao executar: " . $stmt->error);
    }
} else {
    die("Campos obrigatórios faltando");
}
$conn->close();
?>