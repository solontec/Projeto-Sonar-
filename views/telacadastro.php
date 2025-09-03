<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tela de Cadastro - Sonar</title>
    <link rel="stylesheet" href="style.css">

  </head>
  <body>
    <!-- div principal como fundo estilizado pro formulario-->


    <div class="form-fundo">

         <!-- div que contem o formulario do cadastro-->

        <div class="form-cadastro">

            <h2>Cadastro</h2>

         <!-- inicio do formulario com metodo POST e destino cadastro.php-->
            <form action="../controller/cadastro.php" method="post">

        <!-- rotulo e campo de entrada para o nome e etc-->

            <label for="nome">Nome Completo:</label>
            <input type="text" name="nome" required>

            <label for="email">Email:</label>
            <input type="email" name="email" required>

            <label for="senha">Senha:</label>
            <input type="password" name="senha" required>

            <select name="tipo" required>
                <option value="" disabled selected>Selecione o Tipo</option>
                <option value="cliente">Cliente</option>
                <option value="empresa">Empresa</option>
            </select>

                <button type="submit">Cadastrar</button>
            </form>
        </div>
    </div>

    <!-- Plugin VLibras -->
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
