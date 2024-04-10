<?php

if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password']) && $_POST['password'] == 12345){

	$to = $_POST['email'];
	$subject = '=?utf-8?B?' . base64_encode('Поздравление!'). '?=';
	$headers = "From: POKECH <cccpw@xd0.ru> \r\n".
	"Reply-To: POKECH <cccpw@xd0.ru> \r\n".
	"X-Mailer: PHP/".phpversion(). "\r\n".
	"Content-Type: text/html; charset=UTF-8 \r\n".
	"MIME-Version: 1.0 \r\n".
	"Content-Transfer-Encoding: base64 \r\n"; 

	$name = $_POST['message'];
	$message = file_get_contents('mail.html');
	$message = str_replace('XXXYYYZZZ', $_POST['name'], $message);

	$flag = mail($to, $subject, $message, $headers);
		if($flag){
			echo 'Поздравление отправлено';
		}else{
			echo 'Ошибка отправки';
		}

}else{
	echo 'Ошибка заполнения формы';
}

?>