<?php
error_reporting(0);
// importa a biblioteca do phpMailer para o meu index
require_once ('src/PHPMailer.php');
require_once ('src/SMTP.php');
require_once ('src/Exception.php');

// importa as classes
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true); //Habiltar o modo debug

// try catch para capturar a sessão e ajudar a depurar erros
try {

    $mail->SMTPDebug = SMTP::DEBUG_SERVER; // Habilitando modo Debug
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com'; //passa o host do gmail
    $mail->SMTPAuth = true; // Indica que quer autenticar via SMTP (Simple Mail Transfer Protocol)
    $mail->Username = 'teste@gmail.com'; //Username e password do gmail
    $mail->Password = 'teste123';
    $mail->Port = 587;

    $mail->setFrom('teste@gmail.com'); // Email de quem envial
    $mail->addAddress('loragir786@in2reach.com'); //Email de quem recebe

    $mail->isHTML(true); // Habilitar o modo HTML
    $mail->Subject = 'Teste de email via Gmail'; // Subtitulo do email
    $mail->Body = 'Chegou o email teste do <strong>Gabriel</strong>'; // Corpo do email com a mensagem
    $mail->AltBody = 'Chegou o email teste do Gabriel'; // Caso ele não aceite o HTML será enviado o teste puro

    if ($email->send()){
        echo 'Enviado com sucesso';
    } else {
        echo 'Erro ao envial email';
    }

} catch (Exception $e) {
    echo "Erro ao enviar mensagem {$mail ->ErrorInfo}";
}

// Para o envio de email funcionar você deve ativar o acesso a app menos seguros em seu email que foi configurado como host
// Vídeo no qual utilizei para estudar o PHPMailer (https://www.youtube.com/watch?v=seoweg-PfEM&ab_channel=CanalTI)