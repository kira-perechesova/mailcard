<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Отправка поздравительных открыток</title>
</head>
<body>
	<?php
		if(!empty($_GET['send'])){
		echo 'Письмо успешно отправлено';
	}

	?>
	<h1>Отправка поздравительных открыток</h1>
	<form action="send2.php" method="POST">
		<p><input type="text" name="password" placeholder="Введите пароль"></p>
		<p><input type="text" name="name" placeholder="Кого поздравляем?"></p>
		<p><input type="text" name="email" placeholder="Почта"></p>
		<p><input type="submit" name="send" value="Выслать открытку"></p>
	</form>
</body>
</html>