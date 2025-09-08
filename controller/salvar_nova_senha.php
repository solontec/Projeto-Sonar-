<?php
require_once "../model/conexao.php";
// teste
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

    $stmt = $conn->prepare("UPDATE usuarios SET senha = ?, token_reset = NULL, token_expira = NULL WHERE id = ?");
    $stmt->bind_param("ss", $senha, $id);
    $stmt->execute();

    echo " Senha redefinida com sucesso! <a href='../views/telaLogin.php'>Fazer login</a>";
} else{
    echo "erro ao redefinir" . $conn->error;
}
