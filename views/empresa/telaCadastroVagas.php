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

            <h3>Escreva o título da vaga</h3>
            <input type="text" name="titulo_vaga" placeholder="Título" required>
            <input type="text" name="descricao_vaga" placeholder="Descrição" required>
            <input type="text" name="experiencia_vaga" placeholder="Experiência" required>
            <input type="text" name="diferencial_vaga" placeholder="Diferencial" required>

            <label for="setor">Selecione o tópico da vaga</label>
            <select name="setor" id="setor" required>
                <option value="" disabled selected>Selecione o setor da vaga</option>
                <option value="Administração">Administração</option>
                <option value="Tecnologia">Tecnologia</option>
                <option value="Engenharia">Engenharia</option>
                <option value="Enfermagem">Enfermagem</option>
            </select>

            <button type="submit">Cadastrar</button>
        </form>
    </div>
</body>
</html>
