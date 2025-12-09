<?php
header('Content-Type: application/json');

// Inclui o arquivo de conexão
require_once 'conexao.php';

// Verifica se a requisição é POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'message' => 'Método não permitido']);
    exit;
}

// Recebe e sanitiza os dados
$nome = $conn->real_escape_string($_POST['nome'] ?? '');
$email = $conn->real_escape_string($_POST['email'] ?? '');
$telefone = $conn->real_escape_string($_POST['telefone'] ?? '');
$mensagem = $conn->real_escape_string($_POST['mensagem'] ?? '');

// Validações básicas
if (empty($nome) || empty($email) || empty($mensagem)) {
    echo json_encode(['success' => false, 'message' => 'Preencha todos os campos obrigatórios']);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(['success' => false, 'message' => 'E-mail inválido']);
    exit;
}

// Prepara e executa a query
$sql = "INSERT INTO orcamentos (nome, email, telefone, mensagem) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssss", $nome, $email, $telefone, $mensagem);

if ($stmt->execute()) {
    echo json_encode(['success' => true, 'message' => 'Orçamento enviado com sucesso!']);
} else {
    echo json_encode(['success' => false, 'message' => 'Erro ao enviar orçamento: ' . $conn->error]);
}

$stmt->close();
$conn->close();
?>