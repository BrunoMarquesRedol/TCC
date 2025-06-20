<?php
$host = 'localhost';
$db   = 'desenvolvetecsite'; // Nome exato do banco
$user = 'root'; // Usuário padrão do XAMPP
$pass = '';     // Senha vazia no XAMPP padrão
$charset = 'utf8mb4';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=$charset", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ATTR_ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro de conexão: " . $e->getMessage());
}
?>