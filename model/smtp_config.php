<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require_once'../vendor/autoload.php';

$emailPassado = $_POST['emailEnviar'] ?? null;

if(!$emailPassado || !filter_var($emailPassado, FILTER_VALIDATE_EMAIL)){
    die("email invalido");
}
$mail = new PHPMailer(true);
$paginaRedefinir = "../views/paginaRedefinir.php";

try{

    $mail->isSMTP(); // define o protocolo de email I( smtp
    $mail->SMTPDebug = 2; // detecta se poissui algo de errado com a conexao
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 587; // porta padrao para todos os envios de email
    $mail->SMTPAuth = true; // ativa a autenticacao smtp
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // isso é obrigatorio para nao recusar a conexao
    // quando usamos a linha acima indicamos que estamos cripotgrafando isso, entrre a conexao do seu server e do SMTP
    //totalmente inseguro utilizar sem criptografia ( inrmacoes sigilosas e pode ser bloqueada pelos provedotres se nao tiver)

    $mail->Username = "feiratecnologica2025@gmail.com";
    $mail->Password = "inckldcxyzdbpqqn"; // senha do 

    $mail->setFrom("feiratecnologica2025@gmail.com"); // email do remetentee
    $mail->addAddress($emailPassado); // email que o usuario inserir

    $mail->isHTML(true); // deixar como true para manipular com html
    $mail->Subject = 'teste de email';
    $mail->Body = "Olá! Aqui segue o acesso para a troca de senha como pedido: <br> <a href='$paginaRedefinir'>Clique aqui para entrar na redefinição de senha!</a>";

    
    if($mail->send()){
        echo "email enviado com sucesso";
    } else{
        echo "erro no email enviado";
    }


}catch ( Exception $e) {
    echo "erro ao enviar as mensagens: " . $mail->ErrorInfo;
}

