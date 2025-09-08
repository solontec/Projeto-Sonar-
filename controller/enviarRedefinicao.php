<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once '../vendor/autoload.php';
require_once "../model/conexao.php";

// auto load das classes nunca esquecer


$emailPassado = $_POST['emailEnviar'] ?? null;

if (!$emailPassado || !filter_var($emailPassado, FILTER_VALIDATE_EMAIL)) { // funcao para sanitizar e tratar emails 
    die("E-mail inválido"); 
}

// Verifica se o email do user ele ja exite , se nao existior no banco ele nem passa para as proximas etapas
$stmt = $conn->prepare("SELECT id FROM usuarios WHERE email = ?");
$stmt->bind_param("s", $emailPassado);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

if (!$user) {
    die("E-mail não encontrado!");
}

// gerando o token de fato
$token = bin2hex(random_bytes(50));
$expira = date("Y-m-d H:i:s", strtotime("+1 hour")); // indicando a hora da expiração ( 1 horinha so pra usar )

// aqui ele atualiza o user
$stmt = $conn->prepare("UPDATE usuarios SET token_reset = ?, token_expira = ? WHERE id = ?");
$stmt->bind_param("ssi", $token, $expira, $user['id']);
$stmt->execute();

// Link para redefinir  a senha do user, o token vale por 1 hr dps nao pode acessar mais
$link = "http://localhost/sonar/Projeto-Sonar-/views/telaRedefinir.php?token=$token";

// Envia e-mail
$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 587;
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

    $mail->Username = "feiratecnologica2025@gmail.com";
    $mail->Password = "inckldcxyzdbpqqn"; // senha de app Gmail

    $mail->setFrom("feiratecnologica2025@gmail.com", "Feira Tecnológica 2025");
    $mail->addAddress($emailPassado);

    $mail->isHTML(true);
    $mail->Subject = "Redefinir  senha";
    $mail->Body = "Olá! Clique no link para redefinir sua senha:<br><a href='$link'>$link</a>";

    $mail->send();
    echo " E-mail enviado com sucesso!";
} catch (Exception $e) {
    echo " Erro ao enviar: {$mail->ErrorInfo}";
}
