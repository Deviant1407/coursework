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
  <title>Личный кабинет администратора: Аккаунт</title>
  <link rel="stylesheet" type="text/css" href="../../styles/main.css">
</head>
<body>
	<div class="bg bg_2 bg_dark">
		<div class="menu left menu_dark">
			<center>
				<div class="logo"></div>
				<br>
				<div class="button_2 button_active_dark">
					<button class="no_border button_1_text_dark" onclick="location.href = 'Administrator_Account.php'">Аккаунт</button>
				</div>
				<div class="button_2 button_active_dark">
					<button class="no_border button_1_text_dark" onclick="location.href = 'Administrator_Table.php'">Таблица</button>
				</div>
				<div class="button_2 button_active_dark">
					<button class="no_border button_1_text_dark" onclick="location.href = 'Administrator_Add_User.php'">Регистрация участника</button>
				</div>
				<div class="button_2 button_active_dark">
					<button class="no_border button_1_text_dark" onclick="location.href = 'Administrator_Factory.php'">Фабрика документов</button>
				</div>
			</center>
		</div>
		<div class="main right main_dark">
			<div class="main_window left">
				<div class="status_bar bg_color_2_dark">Строка состояния</div>
				<br>
				<div class="window_2 bg_color_1_dark">
					<div class="text_1">Об аккаунте</div>
					<div class="left rectangle_2 rectangle_1_dark">
						<select class="text_align_center no_border button_1_text_dark">
                            <option class="text_color_black" label="Корпус"></option>
                            <option class="text_color_black" label="Главный"></option>
							<option class="text_color_black" label="Угреша"></option>
                            <option class="text_color_black" label="Люберецкий"></option>
							<option class="text_color_black" label="Красково"></option>
                        </select>
					</div>
					<div class="left rectangle_2 rectangle_1_dark">
						<input type="text" value="ФИО" class="text_align_center no_border button_1_text_dark">
					</div>
					<br>
				</div>
				<br>
				<div class="window_2 bg_color_1_dark">
					<div class="text_1">Данные для входа</div>
					<div class="left rectangle_2 rectangle_1_dark">
						<input type="text" value="Почта" class="text_align_center no_border button_1_text_dark">
					</div>
					<div class="left rectangle_2 rectangle_1_dark">
						<input type="text" value="Телефон" class="text_align_center no_border button_1_text_dark">
					</div>
					<div class="right rectangle_2 rectangle_1_dark">
						<label>Пароль</label>
						<input type="password" class="text_align_center no_border button_1_text_dark">
					</div>
				</div>
				<br>
				<div class="window_2 bg_color_1_dark">
					<div class="text_1">Безопасность</div>
					<div class="left rectangle_2 rectangle_1_dark">
						<input type="text" value="Вопрос" class="text_align_center no_border button_1_text_dark">
					</div>
					<div class="left rectangle_2 rectangle_1_dark">
						<input type="text" value="Ответ" class="text_align_center no_border button_1_text_dark">
					</div>
				</div>
				<div style="height: 320px;"></div>
				<div class="right button_3 button_1_dark">
					<button class="no_border button_1_text_dark">Сохранить</button>
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