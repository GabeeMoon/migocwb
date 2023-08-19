<?php
require_once('conn.php');

session_start();

$email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
$senha = md5($_POST['senha']);

$sql = 'SELECT * FROM users WHERE email=:email AND senha=:senha';
$result = $conn->prepare($sql);
$result->execute(['email' => $email, 'senha' => $senha]);

if ($result === false) {
    $errorInfo = $result->errorInfo();
    echo "Erro na execução da consulta: " . $errorInfo[2];
    exit;
}

$user = $result->fetch();

if ($user) {
    $_SESSION['id'] = $user['id'];
    $_SESSION['email'] = $user['email'];
    header('Location: ../index.php');
    exit;
} else {
    echo "Usuário não existe";
    exit;
}
?>
