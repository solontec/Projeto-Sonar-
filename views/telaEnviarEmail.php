<?php

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar Senha - Sonar</title>
    <link rel="stylesheet" href="style.css">
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
            <h2>Esqueceu sua senha?</h2>
            <p style="font-size:14px; color:#555; margin-bottom:15px;">
                Digite seu e-mail e enviaremos um link para redefinir sua senha.
            </p>

            <form action="../controller/enviarRedefinicao.php" method="post">
                <label for="emailEnviar">E-mail</label>
                <input type="email" name="emailEnviar" placeholder="Digite seu e-mail" required>

                <button type="submit">Enviar link</button>
            </form>

            <p>Lembrou a senha? <a href="../views/telaLogin.php">Voltar ao login</a></p>
        </div>
    </div>


    <style>
        /* Reset */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Arial', sans-serif;
}

body {
    background-color: #f5faff;
    display: flex;
    flex-direction: column;
    align-items: center;
    min-height: 100vh;
}

/* Navbar */
header {
    width: 100%;
    background-color: #fff;
    padding: 15px 50px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    box-shadow: 0px 1px 5px rgba(0,0,0,0.1);
}

header h1 {
    color: #1f8a96;
    font-size: 22px;
    font-weight: bold;
}

nav ul {
    display: flex;
    list-style: none;
    gap: 20px;
    align-items: center;
}

nav ul li a {
    text-decoration: none;
    color: #333;
    font-size: 15px;
    transition: color 0.3s ease;
}

nav ul li a:hover {
    color: #1f8a96;
}

nav ul li button {
    border: none;
    padding: 8px 16px;
    border-radius: 8px;
    font-size: 14px;
    cursor: pointer;
    transition: 0.3s;
}

.btn-entrar {
    background-color: #a6e1e9;
    color: #000;
}

.btn-entrar:hover {
    background-color: #8ad0d9;
}

.btn-cadastrar {
    background-color: #1f8a96;
    color: #fff;
}

.btn-cadastrar:hover {
    background-color: #166c74;
}

/* Fundo do formulário */
.form-fundo {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-grow: 1;
}

/* Card genérico (serve para login, cadastro e redefinição de senha) */
.form-cadastro {
    background: #fff;
    padding: 40px 30px;
    margin-top: 80px;
    border-radius: 12px;
    box-shadow: 0px 5px 15px rgba(0,0,0,0.1);
    text-align: center;
    width: 380px;
}

.form-cadastro h2 {
    margin-bottom: 15px;
    font-size: 22px;
    color: #1f8a96;
}

.form-cadastro p {
    font-size: 14px;
    color: #333;
    margin-top: 15px;
}

.form-cadastro p a {
    text-decoration: none;
    color: #1f8a96;
    font-weight: bold;
}

.form-cadastro form {
    display: flex;
    flex-direction: column;
    gap: 15px;
    margin-top: 10px;
}

.form-cadastro label {
    text-align: left;
    font-size: 14px;
    color: #444;
}

.form-cadastro input,
.form-cadastro select {
    padding: 10px;
    border-radius: 6px;
    border: 1px solid #ccc;
    outline: none;
    transition: 0.3s;
    font-size: 14px;
}

.form-cadastro input:focus,
.form-cadastro select:focus {
    border-color: #1f8a96;
}

.form-cadastro button {
    background-color: #1f8a96;
    color: white;
    padding: 12px;
    border: none;
    border-radius: 8px;
    font-size: 15px;
    cursor: pointer;
    transition: 0.3s;
}

.form-cadastro button:hover {
    background-color: #166c74;
}

    </style>
</body>
</html>
