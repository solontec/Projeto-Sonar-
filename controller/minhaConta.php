<?php
include('conexao.php');

// Verifica se o id foi enviado
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Prepara a consulta SQL para excluir o registro
    $sql = "DELETE FROM usuarios WHERE id = ?";

    if ($stmt = $conn->prepare($sql)) {
        // Vincula o valor do parâmetro
        $stmt->bind_param('i', $id);

        // Executa a consulta
        if ($stmt->execute()) {
            echo "Registro excluído com sucesso!";
            header("Location: login.php"); // redireciona para a página de login
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
