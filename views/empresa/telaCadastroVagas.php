<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Vagas</title>
    <link rel="stylesheet" href="../../views/static/telaCadastroVagas.css">
</head>
    
<body>
    <div class="form-container">
        <h1>Cadastre sua vaga</h1>
        <form action="../../controller/cadastroVagas.php" method="POST" enctype="multipart/form-data">

    <h3>Título da vaga</h3>
    <input type="text" name="titulo_vaga" placeholder="Ex: Desenvolvedor Front-end" required>

    <h3>Descrição da vaga</h3>
    <input type="text" name="descricao_vaga" placeholder="Breve descrição" required>

    <h3>Experiência necessária</h3>
    <input type="text" name="experiencia_vaga" placeholder="Ex: 2 anos em programação" required>

    <h3>Diferenciais</h3>
    <input type="text" name="diferencial_vaga" placeholder="Ex: Conhecimento em React" required>

    <h3>Setor</h3>
    <select name="setor" id="setor" required>
        <option value="" disabled selected>Selecione o setor</option>
        <option value="Administração">Administração</option>
        <option value="Tecnologia">Tecnologia</option>
        <option value="Engenharia">Engenharia</option>
        <option value="Enfermagem">Enfermagem</option>
    </select>

    <h3>Imagem da vaga</h3>
    <input type="file" name="imagem_vaga" accept="image/*">

    <button type="submit">Cadastrar</button>
    </form>

    </div>

</body>
</html>
