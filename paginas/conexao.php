<?php
$host = 'localhost';
$user = 'seu_usuario';
$password = 'sua_senha';
$database = 'desenvolvetec';

// Criar conexão
$conn = new mysqli($host, $user, $password, $database);

// Verificar conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Definir charset
$conn->set_charset("utf8");
?>