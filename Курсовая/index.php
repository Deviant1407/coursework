<?php
session_start(); // Add this line to start the session

require_once "helpers/function.php";

if (!empty($_SESSION['user'])) {
    header("Location: http://localhost:3000");
    exit; // Add this line to stop executing the rest of the code
}

$login = $_POST['Логин']; // Change $_GET to $_POST to retrieve form data
$password = $_POST['Пароль']; // Change $_GET to $_POST to retrieve form data

$DB = Connect_DB();

if ($login && $password) {
    $Auth = F_Auth($DB, $login, $password);
    if ($Auth != [-1, -1]) {
        if ($Auth[0] == 0) {
            header("Location: http://localhost:3000/pages/Student/Student_Account.php");
            $_SESSION['user'] = $login . " С";
            exit; // Add this line to stop executing the rest of the code
        }
        if ($Auth[0] == 1) {
            header("Location: http://localhost:3000/pages/Tutor/Tutor_Account.php");
            $_SESSION['user'] = $login . " К";
            exit; // Add this line to stop executing the rest of the code
        }
        if ($Auth[0] == 2) {
            header("Location: http://localhost:3000/pages/Admin/Administrator_Account.php");
            $_SESSION['user'] = $login . " А";
            exit; // Add this line to stop executing the rest of the code
        }
    }
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация</title>
    <link rel="stylesheet" type="text/css" href="styles/main.css">
</head>
<body>
    <div class="bg bg_1 bg_dark">
        <center>
            <div style="height: 312px;"></div>
            <form class="window window_dark" method="POST"> <!-- Add method="POST" to the form tag -->
                <div class="authorization">
                    <h1>Авторизация</h1>
                </div>
                <div class="rectangle_1 rectangle_1_dark">
                    <label class="left" style="padding-right: 10px;">Почта</label>
                    <input type="text" id="login" name="Логин" class="left no_border" style="padding-bottom: 3px;">
                </div>
                <br>
                <div class="rectangle_1 rectangle_1_dark">
                    <label class="left" style="padding-right: 10px;">Пароль</label>
                    <input type="password" id="password" name="Пароль" class="left no_border" style="padding-bottom: 3px;">
                </div>
                <br>
                <div class="button_1 button_1_dark">
                    <button id="button_authorization" class="no_border button_1_text_dark">Войти</button>
                </div>
            </form>
        </center>
    </div>    
</body>
</html>