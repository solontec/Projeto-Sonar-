<?php
require_once "../../model/conexao.php";

// Consulta todas as vagas
$sql = "SELECT * FROM vagas";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Vagas Sonar</title>
<link rel="stylesheet" href="../static/telaVagas.css">
<style>
body {
    font-family: Arial, sans-serif;
    background: #f4f6f9;
    margin: 0;
    padding: 0;
}

.jobs-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 20px;
    padding: 20px;
}

.vaga {
    background: #fff;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0px 4px 10px rgba(0,0,0,0.1);
    display: flex;
    flex-direction: column;
    transition: transform 0.2s ease-in-out;
}

.vaga:hover {
    transform: translateY(-5px);
}

.vaga img {
    width: 100%;
    height: 150px;
    object-fit: cover;
}

.vaga-content {
    padding: 15px;
    flex-grow: 1;
    display: flex;
    flex-direction: column;
}

.vaga h3 {
    margin: 0 0 10px;
    font-size: 18px;
    color: #333;
}

.vaga p {
    margin: 5px 0;
    color: #555;
    font-size: 14px;
}

.detalhes {
    display: none;
    margin-top: 10px;
    border-top: 1px solid #eee;
    padding-top: 10px;
}

.btn {
    margin-top: 10px;
    padding: 8px 12px;
    border: none;
    border-radius: 10px;
    cursor: pointer;
    font-weight: bold;
    transition: 0.2s;
}

.btn-primary {
    background: #007bff;
    color: white;
}

.btn-primary:hover {
    background: #0056b3;
}

.upload-form input[type="file"] {
    margin-top: 8px;
}

.upload-form button {
    margin-top: 10px;
    width: 100%;
}
</style>
</head>
<body>

<header class="navbar">
<div class="logo">Sonar</div>
<nav>
  <ul>
    <li><a href="telainicial.php">Início</a></li>
    <li><a href="cursos.php">Cursos</a></li>
    <li><a href="#" class="active">Vagas</a></li>
    <li><a href="#">Sobre Nós</a></li>
  </ul>
</nav>
<div class="auth-buttons">
  <button class="btn btn-secondary">Entrar</button>
  <button class="btn btn-primary">Cadastrar</button>
</div>
</header>

<section class="jobs">
<h2 style="text-align:center; margin:20px 0;">Oportunidades de Trabalho</h2>
<p style="text-align:center; color:#666;">Vagas especialmente voltadas para a comunidade surda e deficientes auditivos</p>

<div class="jobs-container">
<?php
if ($result->num_rows > 0) {
    foreach ($result as $vaga) {
        echo "<div class='vaga'>";
        // Imagem da vaga
        if (!empty($vaga['imagem_vaga'])) {
            echo "<img src='../../uploads/vagas/" . $vaga['imagem_vaga'] . "' alt='" . $vaga['titulo_vaga'] . "'>";
        } else {
            echo "<img src='../../uploads/vagas/default.png' alt='Sem imagem'>";
        }
        
        echo "<div class='vaga-content'>";
        echo "<h3>" . $vaga['titulo_vaga'] . "</h3>";
        echo "<p><strong>Setor:</strong> " . $vaga['topico'] . "</p>";
        echo "<button class='btn btn-primary' onclick='mostrarDetalhes(this)'>Ver detalhes</button>";

        echo "<div class='detalhes'>";
        echo "<p><strong>Descrição:</strong> " . $vaga['descricao_vaga'] . "</p>";
        echo "<p><strong>Experiência:</strong> " . $vaga['experiencia_vaga'] . "</p>";
        echo "<p><strong>Diferencial:</strong> " . $vaga['diferencial_vaga'] . "</p>";

        echo "<form class='upload-form' method='POST' action='enviar_curriculo.php' enctype='multipart/form-data'>";
        echo "<label><strong>Envie seu currículo:</strong></label><br>";
        echo "<input type='file' name='curriculo' accept='.pdf,.doc,.docx' required>";
        echo "<input type='hidden' name='vaga_id' value='" . $vaga['id'] . "'>";
        echo "<button type='submit' class='btn btn-primary'>Enviar Currículo</button>";
        echo "</form>";

        echo "</div>"; // detalhes
        echo "</div>"; // vaga-content
        echo "</div>"; // vaga
    }
} else {
    echo "<p style='text-align:center;'>Nenhuma vaga encontrada.</p>";
}
?>
</div>
</section>

<script>
function mostrarDetalhes(botao) {
    let detalhes = botao.nextElementSibling;
    if (detalhes.style.display === "block") {
        detalhes.style.display = "none";
        botao.textContent = "Ver detalhes";
    } else {
        detalhes.style.display = "block";
        botao.textContent = "Fechar";
    }
}
</script>

</body>
</html>
