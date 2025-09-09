<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Excluir Conta</title>
</head>
<body>
  <h1>Excluir Conta</h1>

  <form action="../controller/minhaContaDelete.php" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir este usuário?')">
    <label for="id">ID do Usuário:</label>
    <input type="email" name="email" required>
    <input type="senha" name="senha" required>
    <button type="submit">Excluir</button>
  </form>
</body>
</html>
