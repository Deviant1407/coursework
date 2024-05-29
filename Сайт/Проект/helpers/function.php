<?php
session_start();

$DB = mysqli_connect("localhost", "root", "", "netrogat");
if (! $DB){
    die("Ошибка подключения");
}
function autoriz($login, $password)
{
    global $DB;
    $Result = mysqli_query($DB, "Select * from `user` where login = '$login' and password = md5('$password');");
    return mysqli_num_rows($Result);
}
function DB_output()
{
    global $DB;
    $Result = mysqli_query($DB, 'Select * from `user`;');
    return mysqli_fetch_all($Result, MYSQLI_ASSOC);
}
?>