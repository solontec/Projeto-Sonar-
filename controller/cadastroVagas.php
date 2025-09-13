<?php

require_once "../model/conexao.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $titulo_vaga = $_POST['titulo_vaga'] ?? null;
    $descricao_vaga = $_POST['descricao_vaga'] ?? null;
    $experiencia_vaga = $_POST['experiencia_vaga'] ?? null;
    $diferencial_vaga = $_POST['diferencial_vaga'] ?? null;
    $setor = $_POST['setor'] ?? null;

    // Upload da imagem
    $imagem_nome = null;
    if (isset($_FILES['imagem_vaga']) && $_FILES['imagem_vaga']['error'] === UPLOAD_ERR_OK) {
        $upload_dir = "../../uploads/vagas/";
        if (!is_dir($upload_dir)) {
            mkdir($upload_dir, 0777, true); // cria pasta se não existir
        }

        $ext = pathinfo($_FILES['imagem_vaga']['name'], PATHINFO_EXTENSION);
        $imagem_nome = uniqid('vaga_', true) . '.' . $ext;

        $destino = $upload_dir . $imagem_nome;

        if (!move_uploaded_file($_FILES['imagem_vaga']['tmp_name'], $destino)) {
            die("Erro ao salvar a imagem.");
        }
    }

    $cadastrarVaga = "INSERT INTO vagas(titulo_vaga, descricao_vaga, experiencia_vaga, diferencial_vaga, topico, imagem_vaga) VALUES (?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($cadastrarVaga);

    if (!$stmt) {
        die("Erro no prepare: " . $conn->error);
    }

    $stmt->bind_param("ssssss", $titulo_vaga, $descricao_vaga, $experiencia_vaga, $diferencial_vaga, $setor, $imagem_nome);

    if ($stmt->execute()) {
        echo "Vaga cadastrada com sucesso!";
    } else {
        echo "Erro no cadastro da vaga: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
