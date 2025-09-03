<?php
    echo "Cadastrado";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login - Sonar</title>
</head>
<body>
    <div class="login">
        <form action="../controller/login.php" method="POST">
            <label for="email">Email:</label>
            <input type="email" name="email" required>

            <label for="senha">Senha:</label>
            <input type="password" name="senha" required>

            <button type="submit">Fazer Login</button>
        </form>
    </div>
</body>
</html>
