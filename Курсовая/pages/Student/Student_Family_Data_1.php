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
                    <br>
					<div class="left text_2">Мать/Законный представитель</div>
                    <div class="left rectangle_2 rectangle_1_dark">
                        <select class="text_align_center no_border button_1_text_dark">
                            <option class="text_color_black" label="Есть"></option>
                            <option class="text_color_black" label="Нет"></option>
                            <option class="text_color_black" label="Законный представитель"></option>
                        </select>
                    </div>
                    <br><br><br>
					<div class="left rectangle_2 rectangle_1_dark">
						<input type="text" value="ФИО" class="text_align_center no_border button_1_text_dark">
					</div>
					<div class="left rectangle_2 rectangle_1_dark">
						<label>Дата рождения</label>
						<input type="date" value="Дата рождения" class="text_align_center no_border button_1_text_dark">
					</div>
					<div class="right rectangle_2 rectangle_1_dark">
						<input type="text" value="Образование" class="text_align_center no_border button_1_text_dark">
					</div>
					<br><br><br>
					<div class="left rectangle_2 rectangle_1_dark">
						<input type="text" value="Место работы" class="text_align_center no_border button_1_text_dark">
					</div>
                    <div class="left rectangle_2 rectangle_1_dark">
						<input type="text" value="Телефон" class="text_align_center no_border button_1_text_dark">
					</div>
					<br>
				</div>
				<br>
				<div class="window_1 bg_color_1_dark">
                    <br>
					<div class="left text_2">Отец/Законный представитель</div>
                    <div class="left rectangle_2 rectangle_1_dark">
                        <select class="text_align_center no_border button_1_text_dark">
                            <option class="text_color_black" label="Есть"></option>
                            <option class="text_color_black" label="Нет"></option>
                            <option class="text_color_black" label="Законный представитель"></option>
                        </select>
                    </div>
                    <br><br><br>
					<div class="left rectangle_2 rectangle_1_dark">
						<input type="text" value="ФИО" class="text_align_center no_border button_1_text_dark">
					</div>
					<div class="left rectangle_2 rectangle_1_dark">
						<label>Дата рождения</label>
						<input type="date" value="Дата рождения" class="text_align_center no_border button_1_text_dark">
					</div>
					<div class="right rectangle_2 rectangle_1_dark">
						<input type="text" value="Образование" class="text_align_center no_border button_1_text_dark">
					</div>
					<br><br><br>
					<div class="left rectangle_2 rectangle_1_dark">
						<input type="text" value="Место работы" class="text_align_center no_border button_1_text_dark">
					</div>
                    <div class="left rectangle_2 rectangle_1_dark">
						<input type="text" value="Телефон" class="text_align_center no_border button_1_text_dark">
					</div>
					<br>
				</div>
                <br>
                <div style="height: 355px;"></div>
				<div>
					<div class="left button_3 button_1_dark">
						<button class="no_border button_1_text_dark" onclick="location.href = 'Student_Family_Data_2.php'">Вперёд</button>
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