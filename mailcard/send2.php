<?php

	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;
	use PHPMailer\PHPMailer\SMTP;

	require 'PHPMailer/src/Exception.php';
	require 'PHPMailer/src/PHPMailer.php';
	require 'PHPMailer/src/SMTP.php';

if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password']) && $_POST['password'] == 12345){

	$name = $_POST['message'];
	$message = file_get_contents('mail.html');
	$message = str_replace('XXXYYYZZZ', $_POST['name'], $message);

	$mail = new PHPMailer();

	$mail->isSMTP();

	$mail->Host = 'smtp.timeweb.ru';
	$mail->SMTPAuth = true;
	$mail->Username = 'cccpw@xd0.ru';
	$mail->Password = 'cccpw3012';
	$mail->SMTPSecur = PHPMailer::ENCRYPTION_SMTPS;
	$mail->Port = 465;
	$mail->CharSet = 'UTF-8';
	$mail->Encoding = 'base64';

	$mail->setFrom('cccpw@xd0.ru', 'ИТМО ДЮКЦ');
	$mail->addAddress($_POST['email']);
	$mail->AddReplyTo('ccccccpw@xd0.ru', 'ИТМО ДЮКЦ');

	$mail->isHTML(true);
	$mail->Subject = 'Поздравление!';
	$mail->Body = $message;

	$flag = $mail->send();

	if($flag){
			header('Location: index.php?send=true');
	}else{
			echo 'Ошибка отправки письма';
		}

}else{
	echo 'Ошибка заполнения формы, повторите отправку';
}

?>