<?php


?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sonar</title>
  <link rel="stylesheet" href="../static/telaInicial.css">
</head>
<body>
  <!-- Navbar -->
  <header class="navbar">
    <div class="logo">Sonar</div>
    <nav>
      <ul>
        <li><a href="#" class="active">Início</a></li>
        <li><a href="#">Cursos</a></li>
        <li><a href="#">Vagas</a></li>
        <li><a href="#">Sobre Nós</a></li>
      </ul>
    </nav>
    <div class="auth-buttons">
      <button class="btn-outline">Entrar</button>
      <button class="btn-primary">Cadastrar</button>
    </div>
  </header>

  <!-- Hero -->
  <section class="hero">
  <div class="hero-text">
    <h1>Bem-vindo ao Sonar</h1>
    <p>
      Conectando talentos surdos e deficientes auditivos com oportunidades de trabalho, 
      enquanto ensinamos Libras para todos.
    </p>
    <div class="hero-buttons">
      <button class="btn-primary">Ver Vagas</button>
      <button class="btn-secondary">Aprender Libras</button>
    </div>
  </div>
  <div class="hero-image">
    <!-- usa a imagem que você subiu -->
    <img src="img/destaque.png" alt="Imagem destaque">
  </div>
</section>


  <!-- Features -->
  <section class="features">
    <h2>Por que escolher o Sonar?</h2>
    <div class="features-grid">
      <div class="feature-card">
        <img src="https://via.placeholder.com/60" alt="Ícone">
        <h3>Oportunidades Exclusivas</h3>
        <p>Vagas de emprego especialmente externas para pessoas surdas e com deficiência auditiva.</p>
      </div>
      <div class="feature-card">
        <img src="https://via.placeholder.com/60" alt="Ícone">
        <h3>Educação em Libras</h3>
        <p>Cursos completos de Libras com vídeos e materiais práticos para todos.</p>
      </div>
      <div class="feature-card">
        <img src="https://via.placeholder.com/60" alt="Ícone">
        <h3>Totalmente Acessível</h3>
        <p>Plataforma desenvolvida com foco em acessibilidade para todos.</p>
      </div>
    </div>
  </section>

<style>
    /* Reset */


</style>


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
