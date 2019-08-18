<?php

require_once("vendor/autoload.php");

// namespace
use Rain\Tpl;
// config
$config = array(
    "tpl_dir"       => "tpl/",
    "cache_dir"     => "cache/",
    "debug"         => false, // set to false to improve the speed
);
Tpl::configure( $config );

// create the Tpl object
$tpl = new Tpl;
// assign a variable
$tpl->assign( "name", "Roberto" );
$tpl->assign( "version", PHP_VERSION );
// assign an array
//$tpl->assign( "week", array( "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday" ) );
// draw the template



$html = $tpl->draw( "index", true );

$mail = new PHPMailer;
//Tell PHPMailer to use SMTP
$mail->isSMTP();

//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 2;

//Set the hostname of the mail server
$mail->Host = 'mail.griel.com.br';
//Set the SMTP port number - likely to be 25, 465 or 587
$mail->Port = 587;
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication
$mail->Username = 'cursophp@griel.com.br';
//Password to use for SMTP authentication
$mail->Password = '//Senha//';
//Set who the message is to be sent from
$mail->setFrom('cursophp@griel.com.br', 'Aula de PHP7');
//Set an alternative reply-to address
$mail->addReplyTo('cursophp@griel.com.br', 'Aula de PHP7');
//Set who the message is to be sent to
$mail->addAddress('roberto@griel.com.br', 'Roberto Filho');
//Set the subject line
$mail->Subject = 'Testando a Classe PHPMailer';
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML($html);
//Replace the plain text body with one created manually
$mail->AltBody = 'Este é um exemplo de email';
//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');
//send the message, check for errors
if (!$mail->send()) {
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message sent!';
}

?>