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
  <title>Личный кабинет администратора: добавление участников</title>
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
				<div class="rectangle_2_no_margin rectangle_1_dark">
					<select class="text_align_center no_border button_1_text_dark">
						<option class="text_color_black" label="Роль"></option>
						<option class="text_color_black" label="Студент"></option>
						<option class="text_color_black" label="Куратор"></option>
						<option class="text_color_black" label="Администратор"></option>
					</select>
				</div>
				<br>
				<div class="window_3 bg_color_1_dark">
					<div class="text_1">Данные участника</div>
					<div class="left rectangle_2 rectangle_1_dark">
						<input type="text" value="ФИО" class="text_align_center no_border button_1_text_dark">
					</div>
					<div class="left rectangle_2 rectangle_1_dark">
						<select class="text_align_center no_border button_1_text_dark">
                            <option class="text_color_black" label="Корпус"></option>
                            <option class="text_color_black" label="Главный"></option>
							<option class="text_color_black" label="Угреша"></option>
                            <option class="text_color_black" label="Люберецкий"></option>
							<option class="text_color_black" label="Красково"></option>
                        </select>
					</div>
					<div class="right rectangle_2 rectangle_1_dark">
						<select class="text_align_center no_border button_1_text_dark">
                            <option class="text_color_black" label="Группа"></option>
                            <option class="text_color_black" label="АП23"></option>
							<option class="text_color_black" label="ГД23"></option>
                            <option class="text_color_black" label="ГДп23"></option>
							<option class="text_color_black" label="ДОУ23"></option>
							<option class="text_color_black" label="ИСВ23"></option>
                            <option class="text_color_black" label="ИСП23"></option>
							<option class="text_color_black" label="Кп23"></option>
                            <option class="text_color_black" label="МР23"></option>
							<option class="text_color_black" label="ОДЛкп23"></option>
							<option class="text_color_black" label="ОДЛу23"></option>
                            <option class="text_color_black" label="ОИСп23"></option>
							<option class="text_color_black" label="ОС23"></option>
                            <option class="text_color_black" label="ПБ23"></option>
							<option class="text_color_black" label="ПД23"></option>
							<option class="text_color_black" label="ПК23"></option>
                            <option class="text_color_black" label="ПКп23"></option>
							<option class="text_color_black" label="ПОАТ23"></option>
                            <option class="text_color_black" label="ПСОп23"></option>
							<option class="text_color_black" label="СА23"></option>
							<option class="text_color_black" label="СП23"></option>
                            <option class="text_color_black" label="ТИК23"></option>
							<option class="text_color_black" label="ТОп23"></option>
                            <option class="text_color_black" label="ЭБАС23"></option>
							<option class="text_color_black" label="ЭК23"></option>
							<option class="text_color_black" label="ГД-22"></option>
                            <option class="text_color_black" label="ГДп22"></option>
							<option class="text_color_black" label="ДОУ-22"></option>
							<option class="text_color_black" label="ДОУп22"></option>
							<option class="text_color_black" label="ЖКХ122"></option>
							<option class="text_color_black" label="ЖКХ222"></option>
							<option class="text_color_black" label="ИС-22"></option>
							<option class="text_color_black" label="ИСп22"></option>
							<option class="text_color_black" label="ЛК-22"></option>
							<option class="text_color_black" label="МРп-22"></option>
							<option class="text_color_black" label="ОДЛк22"></option>
							<option class="text_color_black" label="ОДЛп22"></option>
							<option class="text_color_black" label="ОДЛу22"></option>
							<option class="text_color_black" label="ОС-22"></option>
							<option class="text_color_black" label="П-22"></option>
							<option class="text_color_black" label="ПБ-22"></option>
							<option class="text_color_black" label="ПД-22"></option>
							<option class="text_color_black" label="ПК-22"></option>
							<option class="text_color_black" label="ПКп-22"></option>
							<option class="text_color_black" label="ПОАТ22"></option>
							<option class="text_color_black" label="СА-22"></option>
							<option class="text_color_black" label="СП-22"></option>
							<option class="text_color_black" label="ТО-22"></option>
							<option class="text_color_black" label="ТПИ-22"></option>
							<option class="text_color_black" label="ЭБАС22"></option>
							<option class="text_color_black" label="ГД-21"></option>
							<option class="text_color_black" label="ГДп-21"></option>
							<option class="text_color_black" label="ДОУ-21"></option>
							<option class="text_color_black" label="ДОУп21"></option>
							<option class="text_color_black" label="ЖКХ121"></option>
							<option class="text_color_black" label="ЖКХ221"></option>
							<option class="text_color_black" label="ИС-21"></option>
							<option class="text_color_black" label="ЛК-21"></option>
							<option class="text_color_black" label="МР-21"></option>
							<option class="text_color_black" label="ОДЛк21"></option>
							<option class="text_color_black" label="ОДЛу21"></option>
							<option class="text_color_black" label="ОС-21"></option>
							<option class="text_color_black" label="П-21"></option>
							<option class="text_color_black" label="ПБ-21"></option>
							<option class="text_color_black" label="ПД-21"></option>
							<option class="text_color_black" label="ПДп-21"></option>
							<option class="text_color_black" label="ПК-21"></option>
							<option class="text_color_black" label="ПКп21"></option>
							<option class="text_color_black" label="ПОАТ21"></option>
							<option class="text_color_black" label="СА-21"></option>
							<option class="text_color_black" label="ТО-21"></option>
							<option class="text_color_black" label="ТПИ-21"></option>
							<option class="text_color_black" label="201-ГД"></option>
							<option class="text_color_black" label="202-СП"></option>
							<option class="text_color_black" label="204-ОИ"></option>
							<option class="text_color_black" label="205-ИС"></option>
							<option class="text_color_black" label="43П-20"></option>
							<option class="text_color_black" label="48C-20"></option>
							<option class="text_color_black" label="П11-20"></option>
							<option class="text_color_black" label="П1-20"></option>
							<option class="text_color_black" label="П2-20"></option>
							<option class="text_color_black" label="П22-20"></option>
							<option class="text_color_black" label="ПБ-20 (43)"></option>
							<option class="text_color_black" label="ПОАТ20 (41)"></option>
							<option class="text_color_black" label="ТО-20 (42)"></option>
							<option class="text_color_black" label="ЭБАС20 (45)"></option>
							<option class="text_color_black" label="192-СП"></option>
							<option class="text_color_black" label="193-ПК"></option>
							<option class="text_color_black" label="194-ТМ"></option>
                        </select>
					</div>
					<br><br><br>
					<div class="left rectangle_2 rectangle_1_dark">
						<input type="text" value="Курс" class="text_align_center no_border button_1_text_dark">
					</div>
					<div class="left rectangle_2 rectangle_1_dark">
						<input type="text" value="Почта" class="text_align_center no_border button_1_text_dark">
					</div>
					<div class="right rectangle_2 rectangle_1_dark">
						<input type="text" value="Телефон" class="text_align_center no_border button_1_text_dark">
					</div>
					<br><br><br>
					<div class="left rectangle_2 rectangle_1_dark">
						<label>Пароль</label>
						<input type="password" class="text_align_center no_border button_1_text_dark">
					</div>
					<br>
				</div>
				<div style="height: 417px;"></div>
				<div class="right button_3 button_1_dark">
					<button class="no_border button_1_text_dark">Добавить</button>
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