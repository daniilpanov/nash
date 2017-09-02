<?php
function __autoload($class_name)
{
require_once("../classes/".$class_name . ".php");
}

// подключимся к БД
$connectDB = new Db();
?>

<form method="post">
    <input type="text" name="">
    <input type="submit" value="продолжить">
</form>

