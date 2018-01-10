<?php

// автозагрузка классов
function __autoload($name)
{
    require_once('classes/' . $name . '.php');
}

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <link rel="icon" href="../img/Lighthouse.jpg" type="image/x-icon">
    <title>Система администрирования сайта</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="style/style.css" rel="stylesheet">
</head>