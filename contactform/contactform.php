<?php

require-once('src/PHPMailer.php');
require-once('src/SMTP.php');
require-once('src/Exception.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer(true);

try{
	$mail->SMTPDebug = SMTP::DEBUG_SERVICE;
	$mail->isSMTP();
	$mail->Host = 'smtp.gmail.com';
	$mail->SMTPaUTH = true;
	$mail->Username = ratielaves8@gmail.com;
	$mail->Password = Bareback07;
	$mail->Port = 587;

	$mail->setForm('ratielalves82gmail.com');
	$mail->addAdress('ratielalves8@gmail.com');

	$mail->isHTML(true);
	$mail->Subject = ('E-mail Site Portifólio');
	$mail->Body = 'E-mail de contato do seu site <strong>RA</strong> desenvolvimento web';
	$mail->AltBody = 'E-mail de contato do seu site RA desenvolvimento web'

	if($mail->send()) {
		echo 'Email enviado com sucesso';
	} else {
		echo 'Email não enviado';
	}
	
}catch( Exception $e) {
	echo "Erro ao enviar mensagem: {$mail->ErrorInfo}"
}












?>