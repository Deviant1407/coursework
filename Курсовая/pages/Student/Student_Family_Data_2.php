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
  <title>Личный кабинет студента: данные о семье</title>
  <link rel="stylesheet" type="text/css" href="../../styles/main.css">
</head>
<body>
    <div class="bg bg_2 bg_dark">
	<div class="menu left menu_dark">
			<center>
				<div class="logo"></div>
				<br>
				<div class="button_2 button_active_dark">
					<button class="no_border button_1_text_dark" onclick="location.href = 'Student_Account.php'">Аккаунт</button>
				</div>
				<div class="button_2 button_active_dark">
					<button class="no_border button_1_text_dark" onclick="location.href = 'Student_Family_Data_1.php'">Личные данные</button>
				</div>
				<div class="button_2 button_active_dark">
					<button class="no_border button_1_text_dark" onclick="location.href = 'Student_Personal_Data.php'">О семье</button>
				</div>
			</center>
		</div>
		<div class="main right main_dark">
			<div class="main_window left">
				<div class="status_bar bg_color_2_dark">Строка состояния</div>
				<br>
				<div class="window_1 bg_color_1_dark">
					<div class="text_1">Члены семьи:</div>
					<div class="left rectangle_2 rectangle_1_dark">
						<input type="text" value="ФИО" class="text_align_center no_border button_1_text_dark">
					</div>
					<div class="left rectangle_2 rectangle_1_dark">
						<input type="text" value="Возвраст" class="text_align_center no_border button_1_text_dark">
					</div>
					<div class="right rectangle_2 rectangle_1_dark">
						<input type="text" value="Степень родства" class="text_align_center no_border button_1_text_dark">
					</div>
					<br><br><br>
					<div>
						
					</div>
				</div>
				<br>
				<div class="window_3 bg_color_1_dark">
					<br>
					<div class="left text_width_1 text_2">Статус семьи(список)*</div>
					<div class="left rectangle_2 rectangle_1_dark">
						<input type="text" class="text_align_center no_border button_1_text_dark">
					</div>
                    <br><br><br>
					<div class="left text_width_1 text_2">Противопоказания по здоровью ребенка</div>
					<div class="left rectangle_2 rectangle_1_dark">
						<input type="text" class="text_align_center no_border button_1_text_dark">
					</div>
                    <br><br><br>
                    <div class="left text_width_1 text_2">Если многодетная семья</div>
					<div class="left rectangle_2 rectangle_1_dark">
						<input type="text" value="ФИО детей" class="text_align_center no_border button_1_text_dark">
					</div>
                    <div class="left rectangle_2 rectangle_1_dark">
						<label>Дата рождения</label>
						<input type="date" value="Дата рождения" class="text_align_center no_border button_1_text_dark">
					</div>
                    <br><br><br>
					<div class="left text_width_1 text_2">Если ребенок-инвалид</div>
					<div class="left rectangle_2 rectangle_1_dark">
						<input type="text" value="Диагноз" class="text_align_center no_border button_1_text_dark">
					</div>
				</div>
				<div style="height: 270px;"></div>
				<div>
					<div class="left button_3 button_1_dark">
						<button class="no_border button_1_text_dark" onclick="location.href = 'Student_Family_Data_1.php'">Назад</button>
					</div>
					<div class="right button_3 button_1_dark">
						<button class="no_border button_1_text_dark">Сохранить</button>
					</div>
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