<?php
    


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login - Sonar</title>
    <link rel="stylesheet" href="../views/static/telaLogin.css">
</head>
<body>

    <header>
    <h1>Sonar</h1>
    <nav>
        <ul>
            <li><a href="../views/usuario/telaInicial.php">Início</a></li>
            <li><a href="../views/usuario/telaCursos.php">Cursos</a></li>
            <li><a href="../views/usuario/telaVagas.php">Vagas</a></li>
            <li><a href="../views/telaSobre.php">Sobre Nós</a></li>
            <li><button class="btn-entrar">Entrar</button></li>
            <li><button class="btn-cadastrar">Cadastrar</button></li>
        </ul>
    </nav>
</header>

<div class="login">
    <h2>Entrar no Sonar</h2>
    <form action="../controller/login.php" method="POST">
        <label for="email">E-mail:</label>
        <input type="email" name="email" required>

        <label for="senha">Senha:</label>
        <input type="password" name="senha" required>

        <button type="submit">Fazer Login</button>
    </form>

    <!-- Links extras -->
    <p style="margin-top:15px; font-size:14px; color:#333;">
        Esqueceu a senha? <a href="../views/telaEnviarEmail.php">Clique aqui</a>
    </p>
    <p style="margin-top:5px; font-size:14px; color:#333;">
        Não tem conta? <a href="../views/telaCadastro.php">Cadastre-se</a>
    </p>
</div>


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
