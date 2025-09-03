<?php

require_once "../model/connClass.php"; // puxa o arquivo novamente
session_start(); // inicia uma sessao para o controle de acesso

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST['email'] ?? null;
    $senha = $_POST['senha'] ?? null;

    if (empty($email) || empty($senha)) {
        echo "preencha todos os campos";
    }

    // aqui ele verifica primeiro se existe o email no banco corretamente
    $sql = "SELECT * FROM usuarios WHERE email = ?";
    $stmt = $conn->prepare($sql);

    if (!$stmt) {
        die("Erro no prepare: " . $conn->error);
    }

    $stmt->bind_param("s", $email);
    $stmt->execute();   
    $resultado = $stmt->get_result();

    if ($resultado->num_rows === 1) {
        $usuario = $resultado->fetch_assoc();

        // Verifica a senha com o hash da senha para ver se bate certinho 
        if (password_verify($senha, $usuario['senha'])) {
            
            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];
            $_SESSION['tipo_conta'] = $usuario['tipo_conta'];

            // Redireciona dependendo do tipo
            if ($usuario['tipo_conta'] === "empresa") {
                header("Location: ../views/empresa/telaEmpresaInicial.php");
            } else {
                header("Location: ../views/usuario/telaUsuarioInicial.php");
            }
            exit;
        } else {
            echo "Senha incorreta!";
        }
    } else {
        echo "Usuário não encontrado!";
    }
}
