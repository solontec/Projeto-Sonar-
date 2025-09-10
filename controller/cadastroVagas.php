<?php

require_once "../model/conexao.php";

if($_SERVER["REQUEST_METHOD"] === "POST"){

$titulo_vaga = $_POST['titulo_vaga'] ?? null;
$descricao_vaga = $_POST['descricao_vaga'] ?? null;
$experiencia_vaga = $_POST['experiencia_vaga'] ?? null;
$diferencial_vaga = $_POST['diferencial_vaga'] ?? null;

$cadastrarVaga = "INSERT  INTO vagas(titulo_vaga, descricao_vaga, experiencia_vaga, diferencial_vaga) VALUES (?, ? ,? , ?)";

$stmt = $conn->prepare($cadastrarVaga);

if(!$stmt){
    die("erro no prepare");
}

$stmt->bind_param("ssss", $titulo_vaga, $descricao_vaga, $especificacao_vaga, $diferencial_vaga);

if($stmt->execute()){
    echo "cadastrou a vaga com sucesso";
    
} else{
    echo "erro no cadastro";
}
    
}
?>