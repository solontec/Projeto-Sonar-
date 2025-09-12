<?php 
require_once "../model/conexao.php";
session_start();

// só aceita se for POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // se for cadastro de usuario
    if (!empty($_POST['nome']) && !empty($_POST['email']) && !empty($_POST['senha'])) {
        
        $nome = trim($_POST['nome']);
        $email = trim($_POST['email']);
        $senha = $_POST['senha'];
        $tipo = $_POST['tipo'] ?? "Usuario"; // define padrão se não vier

        $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

        $inserir = "INSERT INTO usuarios (nome, email, senha, tipo_conta) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($inserir);

        if(!$stmt){
            die("Erro no prepare (usuarios): " . $conn->error);
        }

        $stmt->bind_param("ssss", $nome, $email, $senhaHash, $tipo);

        if($stmt->execute()){
            $_SESSION['usuario'] = true;
            header("Location: ../views/telaLogin.php");
            exit;
        } else {
            echo "Erro ao cadastrar usuário: " . $stmt->error;
        }
    }

    // se for cadastro de empresa
    if (!empty($_POST['nome_empresa']) && !empty($_POST['email_empresa']) && !empty($_POST['senha_empresa'])) {

        $nomeEmpresa = trim($_POST['nome_empresa']);
        $cnpjEmpresa = trim($_POST['cnpj_empresa']);
        $razaoEmpresa = trim($_POST['razao_empresa']);
        $descricaoEmpresa = trim($_POST['descricao_empresa']);
        $areaEmpresa = trim($_POST['area_empresa']);
        $endereco = trim($_POST['endereco_empresa']);
        $telefone_empresa = trim($_POST['telefone_empresa']);
        $email_empresa = trim($_POST['email_empresa']);
        $senha_empresa = $_POST['senha_empresa'];
        $site_empresa = trim($_POST['site_empresa']);

        $senhaEmpresaHash = password_hash($senha_empresa, PASSWORD_DEFAULT);

        $inserirEmpresa = "INSERT INTO empresa 
            (nome_empresa, cnpj_empresa, razao_empresa, descricao_empresa, area_empresa, 
             endereco_empresa, telefone_empresa, email_empresa, senha_empresa, site_empresa) 
             VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

        $stmt = $conn->prepare($inserirEmpresa);
        
        if(!$stmt){
            die("Erro no prepare (empresa): " . $conn->error);
        }

        $stmt->bind_param("ssssssssss", 
            $nomeEmpresa, $cnpjEmpresa, $razaoEmpresa, $descricaoEmpresa, $areaEmpresa, 
            $endereco, $telefone_empresa, $email_empresa, $senhaEmpresaHash, $site_empresa
        );

        if($stmt->execute()){
            header("Location: ../views/telaLogin.php");
            exit;
        } else {
            echo "Erro ao cadastrar empresa: " . $stmt->error;
        }
    }

    // se nenhum campo esperado foi enviado
    if (empty($_POST['nome']) && empty($_POST['nome_empresa'])) {
        echo "Nenhum dado de cadastro recebido!";
    }
}
?>
