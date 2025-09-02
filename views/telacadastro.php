<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Formulário de Cadastro</title>
  </head>
  <body>
    <!-- div principal como fundo estilizado pro formulario-->


    <div class="form-fundo">

         <!-- div que contem o formulario do cadastro-->

        <div class="form-cadastro">

            <h2>Cadastro</h2>

         <!-- inicio do formulario com metodo POST e destino cadastro.php-->
            <form action="cadastro.php" method="post">

        <!-- rotulo e campo de entrada para o nome e etc-->

            <label for="nome">Nome Completo:</label>
            <input type="text" name="nome" required>

            <label for="email">Email:</label>
            <input type="email" name="email" required>

            <label for="senha">Senha:</label>
            <input type="password" name="senha" required>

                <button type="submit">Cadastrar</button>
            </form>
        </div>
    </div>
    
  </body>
</html>
