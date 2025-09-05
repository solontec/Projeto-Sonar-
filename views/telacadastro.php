
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar no Sonar</title>
    <link rel="stylesheet" href="../views/static/telaCadastro.css">
</head>
<body>

    <!-- Navbar -->
    <header>
        <h1>Sonar</h1>
        <nav>
            <ul>
                <li><a href="#">Início</a></li>
                <li><a href="#">Cursos</a></li>
                <li><a href="#">Vagas</a></li>
                <li><a href="#">Sobre Nós</a></li>
                <li><button class="btn-entrar">Entrar</button></li>
                <li><button class="btn-cadastrar">Cadastrar</button></li>
            </ul>
        </nav>
    </header>

    <!-- Fundo do formulário -->
    <div class="form-fundo">

        <!-- Card do Cadastro -->
        <div class="form-cadastro">
            <h2>Cadastrar no Sonar</h2>

            <form action="../controller/cadastro.php" method="post">
                <label for="nome">Nome Completo</label>
                <input type="text" name="nome" required>

                <label for="email">E-mail</label>
                <input type="email" name="email" required>

                <label for="senha">Senha</label>
                <input type="password" name="senha" required>

                <label for="tipo">Tipo de conta</label>
                <select name="tipo" required>
                    <option value="" disabled selected>Selecione o Tipo</option>
                    <option value="candidato">Candidato a Emprego</option>
                    <option value="empresa">Empresa</option>
                </select>

                <button type="submit">Cadastrar</button>
            </form>

            <p>Já tem conta? <a href="../views/telaLogin.php">Entre aqui</a></p>
        </div>
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

