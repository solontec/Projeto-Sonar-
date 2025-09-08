<?php

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cursos | Sonar</title>
  <link rel="stylesheet" href="../static/telaCursos.css">
</head>
<body>
  <!-- Navbar -->
  <header class="navbar">
    <div class="logo">Sonar</div>
    <nav>
      <ul>
        <li><a href="telainicial.php">Início</a></li>
        <li><a href="#" class="active">Cursos</a></li>
        <li><a href="#">Vagas</a></li>
        <li><a href="#">Sobre Nós</a></li>
      </ul>
    </nav>
    <div class="auth-buttons">
      <button class="btn-outline">Entrar</button>
      <button class="btn-primary">Cadastrar</button>
    </div>
  </header>

  <!-- Cursos -->
  <section class="courses">
    <h2>Cursos de Libras</h2>
    <p>Aprenda Libras com nossos cursos interativos e acessíveis</p>

    <div class="courses-grid">

      <!-- Card 1 -->
      <div class="course-card">
        <div class="card-image">
          <img src="../static/img/curso1.jpg" alt="Alfabeto em Libras">
          <span class="badge novato">Novato</span>
        </div>
        <div class="card-body">
          <h3>Alfabeto em Libras - Básico</h3>
          <p>Aprenda o alfabeto brasileiro em Libras com projeções claras e exercícios práticos.</p>
          <div class="card-footer">
            <span>⏱️ 45 minutos</span>
            <button class="btn-primary">Iniciar Curso</button>
          </div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="course-card">
        <div class="card-image">
          <img src="../static/img/curso2.jpg" alt="Números e Quantidades em Libras">
          <span class="badge novato">Novato</span>
        </div>
        <div class="card-body">
          <h3>Números e Quantidades em Libras</h3>
          <p>Domine os números de 1 a 100 e aprenda a expressar específicas em Libras.</p>
          <div class="card-footer">
            <span>⏱️ 30 minutos</span>
            <button class="btn-primary">Iniciar Curso</button>
          </div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="course-card">
        <div class="card-image">
          <img src="../static/img/curso3.jpg" alt="Cumprimentos e Apresentações">
          <span class="badge intermediario">Intermediário</span>
        </div>
        <div class="card-body">
          <h3>Cumprimentos e Apresentações</h3>
          <p>Aprenda cumprimentos formais e informativos, como se apresentar e fazer perguntas básicas.</p>
          <div class="card-footer">
            <span>⏱️ 60 minutos</span>
            <button class="btn-primary">Iniciar Curso</button>
          </div>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="course-card">
        <div class="card-image">
          <img src="../static/img/curso4.jpg" alt="Apresentação Avançada">
          <span class="badge avancado">Avançado</span>
        </div>
        <div class="card-body">
          <h3>Expressões Avançadas</h3>
          <p>Aprofunde-se em expressões complexas para interações mais elaboradas em Libras.</p>
          <div class="card-footer">
            <span>⏱️ 75 minutos</span>
            <button class="btn-primary">Iniciar Curso</button>
          </div>
        </div>
      </div>

    </div>
  </section>
</body>
</html>
