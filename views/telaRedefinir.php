<?php
require_once "../model/connClass.php";

$token = $_GET['token'] ?? null;

if (!$token) {
    die("Token inválido!");
}

$stmt = $conn->prepare("SELECT id, token_expira FROM usuarios WHERE token_reset = ?");
$stmt->bind_param("s", $token);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

if (!$user || strtotime($user['token_expira']) < time()) {
    die("Link expirado ou inválido!");
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="../controller/salvar_nova_senha.php">
    <input type="hidden" name="id" value="<?= $user['id'] ?>">
    <label>Nova senha:</label>
    <input type="password" name="senha" required>
    <button type="submit">Redefinir senha</button>
</form>

</body>
</html>

