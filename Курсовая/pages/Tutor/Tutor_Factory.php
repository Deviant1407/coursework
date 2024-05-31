<?php
require_once "../../helpers/function.php";
if (empty($_SESSION['user']))
{
    header("Location: http://localhost:3000");
}
?>

<!doctype html>
<html lang="ru">
<head>
  <meta charset="utf-8" />
  <title>Личный кабинет куратора: фабрика документов</title>
  <link rel="stylesheet" type="text/css" href="../../styles/main.css">
</head>
<body>
	<div class="bg bg_2 bg_dark">
		<div class="menu left menu_dark">
			<center>
				<div class="logo"></div>
				<br>
				<div class="button_2 button_active_dark">
					<button class="no_border button_1_text_dark" onclick="location.href = 'Tutor_Account.php'">Аккаунт</button>
				</div>
				<div class="button_2 button_active_dark">
					<button class="no_border button_1_text_dark" onclick="location.href = 'Tutor_Table.php'">Таблица</button>
				</div>
				<div class="button_2 button_active_dark">
					<button class="no_border button_1_text_dark" onclick="location.href = 'Tutor_Factory.php'">Фабрика документов</button>
				</div>
			</center>
		</div>
		<div class="main right main_dark">
			<div class="main_window left">
				<div class="status_bar bg_color_2_dark">Строка состояния</div>
				<br>
				<div class="rectangle_2_no_margin rectangle_1_dark">
					<input type="file" accept=".docx" value="Макет" class="text_align_center no_border button_1_text_dark">
				</div>
				<!--ТУТ МОЖЕТ БЫТЬ КНОПКА ДЛЯ ФАЙЛОВ ГУГЛА-->
				<br>
				<div class="window_3 bg_color_1_dark">
					<div class="text_1">Выбор данных</div>
					<div class="rectangle_3 rectangle_1_dark">
						<label>Почта:</label>
						<input value="" class="no_border button_1_text_dark">
					</div>
					<br>
					<div class="rectangle_3 rectangle_1_dark">
						<label>Телефон:</label>
						<input value="" class="no_border button_1_text_dark">
					</div>
					<br>
					<div class="rectangle_3 rectangle_1_dark">
						<label>Пароль:</label>
						<input value="" class="no_border button_1_text_dark">
					</div>
					<br>
				</div>
				<div style="height: 417px;"></div>
				<div class="right button_3 button_1_dark">
					<button class="no_border button_1_text_dark">Скачать</button>
				</div>
			</div>
			<div class="user right">
				<center>
					<div class="user_logo" onclick="location.href = '../../logout.php'"></div>
				</center>
			</div>
		</div>
	</div>
</body>
</html>