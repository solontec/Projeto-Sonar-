<?php
require_once "../model/conexao.php";
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST['email'] ?? null;
    $senha = $_POST['senha'] ?? null;

    if (empty($email) || empty($senha)) {
        echo "Preencha todos os campos!";
        exit;
    }

    
    $sqlUsuario = "SELECT * FROM usuarios WHERE email = ?";
    $stmt = $conn->prepare($sqlUsuario);

    if (!$stmt) {
        die("Erro no prepare (usuarios): " . $conn->error);
    }

    $stmt->bind_param("s", $email);
    $stmt->execute();
    $resultadoUsuario = $stmt->get_result();

    if ($resultadoUsuario->num_rows === 1) {
        $usuario = $resultadoUsuario->fetch_assoc();

        if (password_verify($senha, $usuario['senha'])) {
            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];
            $_SESSION['tipo_conta'] = $usuario['tipo_conta'];

            if ($usuario['tipo_conta'] === "Empresa") {
                header("Location: ../views/empresa/telaEmpresaInicial.php");
            } else {
                header("Location: ../views/usuario/telaUsuarioInicial.php");
            }
            exit;
        } else {
            echo "Senha incorreta!";
            exit;
        }
    }

    
    $sqlEmpresa = "SELECT * FROM empresa WHERE email_empresa = ?";
    $stmt = $conn->prepare($sqlEmpresa);

    if (!$stmt) {
        die("Erro no prepare (empresa): " . $conn->error);
    }

    $stmt->bind_param("s", $email);
    $stmt->execute();
    $resultadoEmpresa = $stmt->get_result();

    if ($resultadoEmpresa->num_rows === 1) {
        $empresa = $resultadoEmpresa->fetch_assoc();

        if (password_verify($senha, $empresa['senha_empresa'])) {
            $_SESSION['id'] = $empresa['id_empresa']; // use a PK real da tabela
            $_SESSION['nome_empresa'] = $empresa['nome_empresa'];
            $_SESSION['tipo_conta'] = "Empresa";

            header("Location: ../views/empresa/telaEmpresaInicial.php");
            exit;
        } else {
            echo "Senha incorreta!";
            exit;
        }
    }

    // Se não encontrou em nenhuma das duas tabelas
    echo "Usuário ou empresa não encontrado!";
}
