<?php 
require_once "../model/conexao.php";

// cadastro de usuarios comuns
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





// cadastro de empresas

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $nomeEmpresa = $_POST['nome_empresa'] ?? null;
    $cnpjEmpresa = $_POST['cnpj_empresa'] ?? null;
    $razaoEmpresa = $_POST['razao_empresa'] ?? null;
    $descricaoEmpresa = $_POST['descricao_empresa'] ?? null;
    $areaEmpresa = $_POST['area_empresa'] ?? null;
    $endereco = $_POST['endereco_empresa'] ?? null;
    $telefone_empresa = $_POST['telefone_empresa'] ?? null;
    $email_empresa = $_POST['email_empresa'] ?? null;
    $senha_empresa = $_POST['senha_empresa'] ?? null;
    $site_empresa = $_POST['site_empresa'] ?? null;

    $senhaEmpresaHash = password_hash($senha_empresa, PASSWORD_DEFAULT);
    $inserirEmpresa = "INSERT INTO empresa(nome_empresa, cnpj_empresa, razao_empresa, descricao_empresa, area_empresa, 
    endereco_empresa, telefone_empresa, email_empresa, senha_empresa, site_empresa) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($inserirEmpresa);
    
    if(!$stmt){
        echo "erro no prepare";
    }

    $stmt->bind_param("ssssssssss", $nomeEmpresa, $cnpjEmpresa, $razaoEmpresa, $descricaoEmpresa, $areaEmpresa, $endereco, $telefone_empresa, $email_empresa, $senhaEmpresaHash, $site_empresa);

    if($stmt->execute()){
        header("Location: ../views/telaLogin.php");
    }
    }
}


