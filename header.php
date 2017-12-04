<?php

// подключим библиотеку функция
require_once "lib/functions.php";

// автозагрузка классов
function __autoload($name)
{
    require_once('classes/' . $name . '.php');
}

?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <title>Главная страница(сайт'НАШ')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="style/pifagor.css" rel="stylesheet">
</head>