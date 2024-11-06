<?php

//cadastro
$mysqli = new mysqli("localhost", "usuario", "senha", "rede_social");

if ($mysqli->connect_error) {
    die("Conexão falhou: " . $mysqli->connect_error);
}

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

$stmt = $mysqli->prepare("INSERT INTO usuarios (nome, email, senha) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $nome, $email, $senha);
$stmt->execute();
$stmt->close();
$mysqli->close();

header("Location: login.php");




//login 
session_start();
$mysqli = new mysqli("localhost", "usuario", "senha", "rede_social");

$email = $_POST['email'];
$senha = $_POST['senha'];

$stmt = $mysqli->prepare("SELECT id, senha FROM usuarios WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($id, $senha_hash);
$stmt->fetch();

if (password_verify($senha, $senha_hash)) {
    $_SESSION['usuario_id'] = $id;
    header("Location: feed.php");
} else {
    echo "Email ou senha inválidos.";
}

$stmt->close();
$mysqli->close();


//salvar postagens
session_start();
$mysqli = new mysqli("localhost", "usuario", "senha", "rede_social");

$usuario_id = $_SESSION['usuario_id'];
$conteudo = $_POST['conteudo'];

$stmt = $mysqli->prepare("INSERT INTO postagens (usuario_id, conteudo) VALUES (?, ?)");
$stmt->bind_param("is", $usuario_id, $conteudo);
$stmt->execute();
$stmt->close();
$mysqli->close();

header("Location: feed.php");

?>