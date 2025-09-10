<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Vagas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f9fd;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .form-container {
            background: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0px 4px 12px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .form-container h1 {
            margin-bottom: 20px;
            color: #00796b;
            font-size: 22px;
        }

        .form-container h3 {
            align-self: flex-start;
            font-size: 14px;
            margin: 15px 0 5px;
            color: #333;
        }

        .form-container input,
        .form-container select {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 14px;
        }

        .form-container input:focus,
        .form-container select:focus {
            outline: none;
            border-color: #00796b;
            box-shadow: 0 0 4px rgba(0,121,107,0.3);
        }

        .form-container button {
            width: 100%;
            background-color: #00796b;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            transition: 0.3s ease;
        }

        .form-container button:hover {
            background-color: #005f56;
        }

        form{
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h1>Cadastre sua vaga</h1>
        <form action="../../controller/cadastroVagas.php" method="POST">
            
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

            <button type="submit">Cadastrar</button>
        </form>
    </div>
</body>
</html>
