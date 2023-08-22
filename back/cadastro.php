<?php

$username = 'root';
$password = '';

try {
    $conn = new PDO('mysql:host=localhost;dbname=migocwb', $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Prepare a consulta SQL com parâmetros
    $stmt = $conn->prepare("INSERT INTO users (nome, sobrenome, email, senha, cep, cidade, uf, rua, numero, bairro) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    // Criptografa a senha usando MD5
    $senhaCriptografada = md5($_POST['senha']);

    // Vincule os valores dos parâmetros
    $stmt->bindParam(1, $_POST['nome']);
    $stmt->bindParam(2, $_POST['sobrenome']);
    $stmt->bindParam(3, $_POST['email']);
    $stmt->bindParam(4, $senhaCriptografada);
    $stmt->bindParam(5, $_POST['cep']);
    $stmt->bindParam(6, $_POST['cidade']);
    $stmt->bindParam(7, $_POST['uf']);
    $stmt->bindParam(8, $_POST['rua']);
    $stmt->bindParam(9, $_POST['numero']);
    $stmt->bindParam(10, $_POST['bairro']);

    // Execute a consulta
    $stmt->execute();

    // Exiba uma mensagem de sucesso
    echo "Registro inserido com sucesso!";
} catch(PDOException $e) {
    // Exiba uma mensagem de erro
    echo "Erro ao inserir o registro: " . $e->getMessage();
}

?>
