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
      <button class="btn-outline">Entrar</button>
      <button class="btn-primary">Cadastrar</button>
    </div>
  </header>

  
  <section class="jobs">
    <h2>Oportunidades de Trabalho</h2>
    <p>Vagas especialmente voltadas para a comunidade surda e deficientes auditivos</p>

    <div class="jobs-container">
      <p class="no-jobs">

    <?php
      if ($result->num_rows > 0) {
    foreach ($result as $vaga) {
        echo "<p>";
        echo "Título: " . $vaga['titulo_vaga'] . "<br>";
        echo "Descrição: " . $vaga['descricao_vaga'] . "<br>";
        echo "Experiência: " . $vaga['experiencia_vaga'] . "<br>";
        echo "Diferencial: " . $vaga['diferencial_vaga'] . "<br>";
        echo "Setor: " . $vaga['topico'] . "<br>";
        
    }
    } else {
    echo "Nenhuma vaga encontrada.";
} 
    ?>

      </p>
      
    </div>
  </section>

  
    <div vw class="enabled">
  <div vw-access-button class="active"></div>
  <div vw-plugin-wrapper>
    <div class="vw-plugin-top-wrapper"></div>
  </div>
</div>

<script src="https://vlibras.gov.br/app/vlibras-plugin.js"></script>
<script>
  new window.VLibras.Widget('https://vlibras.gov.br/app');
</script>
</body>
</html>


