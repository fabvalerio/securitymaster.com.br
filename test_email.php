<?php
$to      = 'fabio@web4br.com';
$subject = 'Teste de envio via SendGrid';
$message = 'Este é um teste de e-mail enviado através do SendGrid via msmtp.';
$headers = 'From: contato@web4br.vom' . "\r\n" .
           'Reply-To: contato@web4br.vom' . "\r\n" .
           'X-Mailer: PHP/' . phpversion();

if (mail($to, $subject, $message, $headers)) {
    echo "E-mail enviado com sucesso!";
} else {
    echo "Falha ao enviar e-mail.";
}
?>
