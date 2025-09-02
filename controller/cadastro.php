<?php 
require_once "../model/connClass.php";

$nome = $_POST['nome'] ?? null;
$email = $_POST['email'] ?? null;
$senha = $_POST['senha'] ?? null;
$tipo = $_POST['tipo'] ?? null;

$senhaHash = password_hash($senha, PASSWORD_DEFAULT);
$inserir = "INSERT INTO usuarios (nome, email, senha, tipo) VALUES (? ? ?)";
