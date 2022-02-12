<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta http-equiv="Refresh" content="3; URL=https://floris-med.ru/">
	<meta name="robots" content="noindex, follow">
</head>

<body>
	<?php
		$fio = $_POST['fio'];
		$phone = $_POST['phone'];

		if (mail("manager.floris-med@yandex.ru", "Заявка:", "ФИО: ".$fio."\r\n"."Телефон: ".$phone))
			{echo "Сообщение успешно отправлено";}
		else
			{echo "При отправке сообщения возникли ошибки";
		}
	?>
</body>
</html>
