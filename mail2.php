<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta http-equiv="Refresh" content="3; URL=https://floris-med.ru/">
	<meta name="robots" content="noindex, follow">
</head>

<body>
	<?php
		//session_start();
		$fio = $_POST['fio'];
		$phone = $_POST['phone'];
		$email = $_POST['e-mail'];
		$mes = $_POST['mes'];

/*			$fio = htmlspecialchars($fio);
		$email = htmlspecialchars($email);
		$subject = htmlspecialchars($subject);
		$text = htmlspecialchars($text);

		$fio = urldecode($fio);
		$email = urldecode($email);
		$subject = urldecode($subject);
		$text = urldecode($text);

		$fio = trim($fio);
		$email = trim($email);
		$subject = trim($subject);
		$text = trim($text);*/
		//echo $fio;
		//echo "<br>";
		//echo $email;

		if (mail("manager.floris-med@yandex.ru", "Заявка с сайта (страница Контакты)", "ФИО: ".$fio."\r\n"."Телефон: ".$phone."\r\n"."E-mail: ".$email."\r\n"."Комментарий: ".$mes))
			{echo "Сообщение успешно отправлено";}
		else
			{echo "При отправке сообщения возникли ошибки";
		}
	?>
</body>
</html>
