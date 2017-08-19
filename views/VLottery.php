<?php
function __autoload($class_name)
{
    require_once("classes/".$class_name . ".php");
}
if(!$_POST) {
    ?>

    <h1>ЛОТТЕРЕЯ!</h1>
    <h3>6 из 36</h3>
    <form method="post">
        ведите 6 любых чисел от 1 до 36
        1-е <input type="text" name="numb1">
        2-е <input type="text" name="numb2">
        3-е <input type="text" name="numb3">
        4-е <input type="text" name="numb4">
        5-е <input type="text" name="numb5">
        6-е <input type="text" name="numb6">
        <input type="submit" value="продолжить">
    </form>

    <?php

}
else{

    $numb1= new CLottery($_POST);
    $numb1->checklottery();
}
?>