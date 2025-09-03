<?php 
require_once "../model/connClass.php";

if($_SERVER["REQUEST_METHOD"] === "POST"){

$nome = $_POST['nome'] ?? null;
$email = $_POST['email'] ?? null;
$senha = $_POST['senha'] ?? null;
$tipo = $_POST['tipo'] ?? null;

$senhaHash = password_hash($senha, PASSWORD_DEFAULT);
$inserir = "INSERT INTO usuarios (nome, email, senha, tipo_conta) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($inserir);

if(!$stmt){
    die("erro no prepare");
}

$stmt->bind_param("ssss", $nome, $email, $senhaHash, $tipo);

if($stmt->execute()){
    $_SESSION['usuario'] = true;
    header("Location: ../views/telaLogin.php");
}
}
 echo "Cadastrado!";