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
  <title>Личный кабинет администратора: таблица студентов</title>
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
				<div class="window_4 bg_color_2_dark table_overflow">
					<table class="table_dark">
						<tr>
							<th>ID</th>
							<th>Корпус</th>
							<th>Группа</th>
							<th>ФИО</th>
							<th>Телефон</th>
							<th>Email</th>
							<th>Пол</th>
							<th>Дата рождения</th>
							<th>Место рождения</th>
							<th>Гражданство</th>
							<th>Адрес регистрации</th>
							<th>Адрес проживания</th>
							<th>СНИЛС</th>
							<th>ИНН</th>
							<th>Прошлое учебное заведение</th>
							<th>Дата окончания прошлого учебного заведения</th>
							<th>Родитель: ФИО</th>
							<th>Родитель: Дата рождения</th>
							<th>Родитель: Телефон</th>
							<th>Родитель: Образование</th>
							<th>Родитель: Место работы</th>
							<th>Статус семьи</th>
							<th>Противопоказания по здоровью</th>
						</tr>
						<?php
						$DB = Connect_DB();
						$Result = Use_DB($DB, 'SELECT * FROM `Студенты`;');
            			foreach($Result as $Row)
						{
							$ID_C = $Row['ID_корпуса'];
							$ID_G = $Row['ID_группы'];
							$ID_F = $Row['ID_семьи'];

							foreach(Use_DB($DB, "SELECT * FROM `Семейный_статус` WHERE `ID_семьи` = $ID_F;") as $R)
							{
								if ($R['Полная'] == "Да")
								{
									$FS = "Полная";
								}
								if ($R['Родители_в_разводе'] == "Да")
								{
									$FS = "Родители в разводе";
								}
								if ($R['Малообеспеченная'] == "Да")
								{
									$FS = "Малообеспеченная";
								}
								if ($R['Потеря_кормильца'] == "Да")
								{
									$FS = "Потеря кормильца";
								}
								if ($R['Мать_одиночка'] == "Да")
								{
									$FS = "Мать-одиночка";
								}
								if ($R['Отец_одиночка'] == "Да")
								{
									$FS = "Отец-одиночка";
								}
								if ($R['Ребёнок_инвалид'] == "Да")
								{
									$FS = "Ребёнок-инвалид";
								}
								if ($R['Ребёнок_сирота'] == "Да")
								{
									$FS = "Ребёнок-сирота";
								}
								if ($R['Под_опекой'] == "Да")
								{
									$FS = "Под опекой";
								}
								if ($R['Повторный_брак'] == "Да")
								{
									$FS = "Повторный брак";
								}
							}
							foreach(Use_DB($DB, "SELECT `Название` FROM `Корпус` WHERE `ID_корпуса` = $ID_C;") as $R)
							{
								$R2 = $R['Название'];
							}
							foreach(Use_DB($DB, "SELECT `Название` FROM `Группы` WHERE `ID_группы` = $ID_G") as $R)
							{
								$R3 = $R['Название'];
							}
							foreach(Use_DB($DB, "SELECT `ФИО` FROM `Семья` WHERE `ID_семьи` = $ID_F") as $R)
							{
								$R4 = $R['ФИО'];
							}
							foreach(Use_DB($DB, "SELECT `Дата_рождения` FROM `Семья` WHERE `ID_семьи` = $ID_F") as $R)
							{
								$R5 = $R['Дата_рождения'];
							}
							foreach(Use_DB($DB, "SELECT `Телефон` FROM `Семья` WHERE `ID_семьи` = $ID_F") as $R)
							{
								$R6 = $R['Телефон'];
							}
							foreach(Use_DB($DB, "SELECT `Образование` FROM `Семья` WHERE `ID_семьи` = $ID_F") as $R)
							{
								$R7 = $R['Образование'];
							}
							foreach(Use_DB($DB, "SELECT `Место_работы` FROM `Семья` WHERE `ID_семьи` = $ID_F") as $R)
							{
								$R8 = $R['Место_работы'];
							}
        				?>
						<tr>
							<td>
								<?=$Row['ID_студента']?>
							</td>
							<td>
								<?=$R2?>
							</td>
							<td>
								<?=$R3?>
							</td>
							<td>
								<?=$Row['ФИО']?>
							</td>
							<td>
								<?=$Row['Телефон']?>
							</td>
							<td>
								<?=$Row['Электронная_почта']?>
							</td>
							<td>
								<?=$Row['Пол']?>
							</td>
							<td>
								<?=$Row['Дата_рождения']?>
							</td>
							<td>
								<?=$Row['Место_рождения']?>
							</td>
							<td>
								<?=$Row['Гражданство']?>
							</td>
							<td>
								<?=$Row['Адрес_места_регистрации']?>
							</td>
							<td>
								<?=$Row['Адрес_фактического_проживания']?>
							</td>
							<td>
								<?=$Row['СНИЛС']?>
							</td>
							<td>
								<?=$Row['ИНН']?>
							</td>
							<td>
								<?=$Row['Прошлое_учебное_заведение']?>
							</td>
							<td>
								<?=$Row['Дата_окончания_школы']?>
							</td>
							<td>
								<?=$R4?>
							</td>
							<td>
								<?=$R5?>
							</td>
							<td>
								<?=$R6?>
							</td>
							<td>
								<?=$R7?>
							</td>
							<td>
								<?=$R8?>
							</td>
							<td>
								<?=$FS?>
							</td>
							<td>
								<?=$Row['Противопоказания_по_здоровью']?>
							</td>
						</tr>
						<?php 
            			}
        				?>
					</table>
				</div>
				<div style="height: 25px;"></div>
				<div class="right button_3 button_1_dark">
					<button class="no_border button_1_text_dark">Сохранить (Временно не работает)</button>
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