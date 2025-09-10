<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Vagas</title>
</head>
<body>
    <div class="cadastrar">
        
    <h1>Cadastre sua vaga</h1>
        <form action="../../controller/cadastroVagas.php" method="POST">

        <h3>Escreva o titulo da vada</h3>
        <input type="text" name="titulo_vaga" required>
        <input type="text" name="descricao_vaga" required>
        <input type="text" name="experiencia_vaga" required>
        <input type="text" name="diferencial_vaga" required>

         <label for="tipo">Selecione o tópico da vaga</label>
                <select name="setor" required>
                    <option value="" disabled selected>Selecione o setor da vaga</option>
                    <option value="Adminstração">Adminstração</option>
                    <option value="Tecnlogia">Tecnlogia</option>
                    <option value="Engenharia">Engenharia</option>
                    <option value="Enfermagem">Enfermagem</option>
                </select>

                
        <button type="submit">Cadastrar</button>
        </form>
    </div>
</body>
</html>