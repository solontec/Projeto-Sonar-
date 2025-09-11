<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastrar no Sonar</title>
  <link rel="stylesheet" href="../views/static/telaCadastro.css">
</head>
<body>

 
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

  
  <div class="form-fundo">
    <div class="form-cadastro">
      <h2>Cadastrar no Sonar</h2>

      
<form id="formCliente" action="../controller/cadastro.php" method="post">
  <label for="nome">Nome Completo</label>
  <input type="text" name="nome" id="nome" required>

  <label for="email">E-mail</label>
  <input type="email" name="email" id="email" required>

  <label for="senha">Senha</label>
  <input type="password" name="senha" id="senha" required>

  <label for="tipo_cliente">Tipo de conta</label>
  <select name="tipo" id="tipo_cliente" required onchange="alternarFormulario()">
    <option value="" disabled selected>Selecione o Tipo</option>
    <option value="Cliente">Candidato a Emprego</option>
    <option value="Empresa">Empresa</option>
  </select>

  <button type="submit">Cadastrar</button>
</form>

<!-- Formulário da Empresa -->

<form id="formEmpresa" action="../controller/cadastro.php" method="post" style="display:none;" >
  <label for="nome_empresa">Nome da Empresa</label>
  <input type="text" name="nome_empresa" id="nome_empresa" required>

  <label for="cnpj_empresa">CNPJ</label>
  <input type="text" name="cnpj_empresa" id="cnpj" placeholder="00.000.000/0001-00" required maxlength="14">

  <label for="razao_empresa">Razão Social</label>
  <input type="text" name="razao_empresa" id="razao_empresa" required>

  <label for="descricao_empresa">Descrição da empresa</label>
  <input type="text" name="descricao_empresa" id="descricao_empresa" required > 

  <label for="area_empresa">Area de atuação</label>
  <input type="text" name="area_empresa" id="descricao_empresa" required maxlength="150"> 

  <label for="endereco">Endereço</label>
  <input type="text" name="endereco_empresa" id="endereco" placeholder="Rua Exemplo, 123" required maxlength="60">


  <label for="telefone">Telefone</label>
  <input type="text" name="telefone_empresa" id="telefone" placeholder="(11) 99999-9999" required maxlength="11">

  <label for="email_empresa">E-mail</label>
  <input type="email" name="email_empresa" id="email_empresa" required maxlength="40">

  <label for="senha_empresa">Senha</label>
  <input type="password" name="senha_empresa" id="email_empresa" required maxlength="16">

  <label for="site">Site</label>
  <input type="url" name="site_empresa" id="site" placeholder="https://www.suaempresa.com" maxlength="200">

  <label for="tipo_empresa">Tipo de conta</label>
  <select name="tipo" id="tipo_empresa" required onchange="alternarFormulario()">
    <option value="" disabled>Selecione o Tipo</option>
    <option value="Cliente">Candidato a Emprego</option>
    <option value="Empresa" selected>Empresa</option>
  </select>
  <button type="submit">Cadastrar</button>
</form>


      <p>Já tem conta? <a href="../views/telaLogin.php">Entre aqui</a></p>
    </div>
  </div>

  <script>
  function alternarFormulario() {
    const formCliente = document.getElementById("formCliente");
    const formEmpresa = document.getElementById("formEmpresa");
    const selectCliente = document.getElementById("tipo_cliente");
    const selectEmpresa = document.getElementById("tipo_empresa");

    // Se o usuário está no formulário de Cliente
    if (formCliente.style.display !== "none") {
      if (selectCliente.value === "Empresa") {
        formCliente.style.display = "none";
        formEmpresa.style.display = "flex";
      }
    } 
    // Se o usuário está no formulário de Empresa
    else if (formEmpresa.style.display !== "none") {
      if (selectEmpresa.value === "Cliente") {
        formEmpresa.style.display = "none";
        formCliente.style.display = "flex";
      }
    }
  }
</script>


</body>
</html>
