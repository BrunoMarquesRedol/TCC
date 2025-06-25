<?php
session_start();
if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
    die(json_encode(['success' => false, 'message' => 'Token CSRF inválido']));
}
?>