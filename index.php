<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<!-- <meta name = "viewport" content = "width=device-width, initial-scale=1.0" > -->
	<link rel="stylesheet" href="style.css">
	<title>uniMail</title>
</head>
<body>
	<form action="mail.php" method="POST">
		<select name = "subject">
			<option disabled selected>Тема письма</option>
			<option value="1">Вопрос</option>
			<option value="2">Личный</option>
			<option value="3">Благодарность</option>
		</select>


		<input type="email" name = "email" placeholder="e-mail" maxlength="25" required>



		<textarea name="message" placeholder="Введите сообщение" maxlength="100" required></textarea>

		<input type="submit" value="Отправить письмо">

	</form>

</body>
</html>