<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

if (isset($_POST['enviar'])) {

    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                //Enable verbose debug output
        $mail->isSMTP();                                        //Send using SMTP
        $mail->Host       = 'smtp.hostinger.com';               //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                               //Enable SMTP authentication
        $mail->Username   = 'contato@viptransporte.com.br';     //SMTP username
        $mail->Password   = 'Vipe4730@';                        //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;        //Enable implicit TLS encryption
        $mail->Port       = 465;                                //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        
        // Configuração do charset
        $mail->CharSet = 'UTF-8';

        //Recipients
        $mail->setFrom('contato@viptransporte.com.br', 'Contato Vip Transporte');
        $mail->addAddress('contato@viptransporte.com.br', 'Joe User');   //Add a recipient    
        $mail->addReplyTo('contato@viptransporte.com.br', 'Information');

        //Content
        $mail->isHTML(true);    //Set email format to HTML
        $mail->Subject = 'Formulário de contato';

        $body = "Mensagem enviada através do site, segue informações abaixo:<br>
                Nome: " .  $_POST['text'] . "<br>
                Telefone: " .  $_POST['tel'] . "<br>
                E-mail: " . $_POST['email'] . "<br>
                Messagem:<br> " .$_POST['message'];

        $mail->Body    = $body;
        // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        echo 'E-mail enviado com Sucesso';
    } catch (Exception $e) {
        echo "Erro ao enviar o e-mail: {$mail->ErrorInfo}";
    }

} else {
    echo "Erro ao enviar o e-mail, acesso não foi via formulário";
}
