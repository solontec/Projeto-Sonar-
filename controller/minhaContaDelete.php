<?php
require_once '../model/conexao.php';
if (isset($_POST['id'])) {
    $id = $_POST['id'];

    $sql = "DELETE FROM usuarios WHERE id = ?";
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param('i', $id);

        if ($stmt->execute()) {
            // Excluiu e redireciona
            header("Location: ../views/telaLogin.php");
            exit();
        } else {
            echo "Erro ao excluir o registro.";
        }
        $stmt->close();
    } else {
        echo "Erro na preparação da consulta.";
    }
} else {
    echo "ID não fornecido.";
}
