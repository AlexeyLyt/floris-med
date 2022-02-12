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
			$surename = $_POST["surename"];
			$firstname = $_POST["firstname"];
			$patronyname = $_POST["patronyname"];
			$tel = $_POST["phone"];
			$email = $_POST["email"];
			$age = $_POST["age"];
			$citizenship = $_POST["citizenship"];
			$schedule = $_POST["schedule"];
			$sanitarybook = $_POST["sanitary-book"];
			$education = $_POST["education"];
			$mededucation = $_POST["med-education"];
			$usercomment = $_POST["usercomment"];


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

			if (mail("manager.floris-med@yandex.ru", "Заявка с сайта", "Фамилия: ".$surename."\r\n"."Имя: ".$firstname."\r\n"."Отчество: ".$patronyname."\r\n"."Телефон: ".$tel."\r\n"."Почта: ".$email."\r\r\n"."Возраст: ".$age."\r\n"."Гражданство: ".$citizenship."\r\n"."График работы: ".$schedule."\r\n"."Наличие санитарной книжки: ".$sanitarybook."\r\n"."Образование: ".$education."\r\n"."Наличие мед. образования: ".$mededucation."\r\n"."Комментарий: ".$usercomment))
				{echo "Сообщение успешно отправлено";}
			else
				{echo "При отправке сообщения возникли ошибки";
				}
	?>
</body>
</html>
