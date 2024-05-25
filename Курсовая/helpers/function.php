<?php
session_start();

function Connect_DB()
{
    $DB = mysqli_connect("vkusnitz.beget.tech", "vkusnitz_sd", "root_1234", "vkusnitz_sd");
    if (! $DB){
        die("Ошибка подключения");
    }
    else {
        return $DB;
    }
}
function Use_DB($DB, $Query)
{
    $Result = mysqli_query($DB, $Query);

    return mysqli_fetch_all($Result, MYSQLI_ASSOC);
}

function Close_DB($DB)
{
    mysqli_close($DB);
}

function F_Auth($DB, $login, $password)
{
    $Result_1 = mysqli_query($DB, "Select * from `Администраторы` where Электронная_почта = '$login' and Пароль = '$password';");
    $Result_2 = mysqli_query($DB, "Select * from `Кураторы` where Электронная_почта = '$login' and Пароль = '$password';");
    $Result_3 = mysqli_query($DB, "Select * from `Студенты` where Электронная_почта = '$login' and Пароль = '$password';");

    $Res_num_1 = mysqli_num_rows($Result_1);
    $Res_num_2 = mysqli_num_rows($Result_2);
    $Res_num_3 = mysqli_num_rows($Result_3);

    if ($Res_num_1 != 0){
        return [0, $Res_num_1];
    }
    if ($Res_num_2 != 0){
        return [1, $Res_num_2];
    }
    if ($Res_num_3 != 0){
        return [2, $Res_num_3];
    }
    return [-1, -1];
}
?>