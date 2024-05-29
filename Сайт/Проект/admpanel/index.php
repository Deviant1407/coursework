<?php
require_once "../helpers/function.php";
if (empty($_SESSION['user']))
{
    header("Location: http://localhost:3000");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Доступные продукты</title>
    <link rel="icon" href="images/logo.png">
    <link rel="stylesheet" href="styles/main.css">
</head>
<body>
<header>
        <img width="100px" height="100px" src="images/logo.png" alt="Логотип">
        <h1>Доступные продукты</h1>
    </header>
    <nav>
        <a href="/">Главная</a>
        <a href="/logout.php">Выйти</a>
    </nav>
    <table>
        <tr><th>ID</th><th>Логин</th><th>Пароль</th></tr>
        <?php
            foreach(DB_output() as $Row)
            {
        ?>
        <tr>
            <td>
                <?=$Row['ID']?>
            </td>
            <td>
                <?=$Row['Login']?>
            </td>
            <td>
                <?=$Row['Password']?>
            </td>
        </tr>
        <?php 
            }
        ?>
    </table>
</body>
</html> 