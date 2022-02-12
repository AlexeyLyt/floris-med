<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta http-equiv="Refresh" content="3; URL=https://floris-med.ru/">
	<meta name="robots" content="noindex, follow">
</head>

<body>
	<?php
			$name = $_POST['name'];
			$tel = $_POST['phone'];

			if (mail("manager.floris-med@yandex.ru", "Заявка с главной страницы сайта", "Имя: ".$name."\r\n"."Телефон: ".$tel))
				{echo "Сообщение успешно отправлено";}
			else
				{echo "При отправке сообщения возникли ошибки";}
	?>
</body>
</html>
