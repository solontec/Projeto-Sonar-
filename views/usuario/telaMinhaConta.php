<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <title>Excluir Conta</title>
</head>
<body>
  <h1>Excluir Conta</h1>

  <form action="../controller/minhaConta.php" method="get" onsubmit="return confirm('Tem certeza que deseja excluir este usuário?')">
    <label for="id">ID do Usuário:</label>
    <input type="number" name="id" id="id" required>
    <button type="submit">Excluir</button>
  </form>
</body>
</html>
