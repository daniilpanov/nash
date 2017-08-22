<!DOCTYPE html>
<html lang="ru">

<head>
    <link href="style/style.css" rel="stylesheet" />
</head>

<body >
<?php
function __autoload($class_name)
{
    require_once("classes/".$class_name . ".php");
}
if(!$_POST) {
    ?>

<table>
    <tr>
    <td><h1>ЛОТТЕРЕЯ!</h1></td>
    </tr>
    <tr>
    <td><h3>6 из 36</h3></td>
    </tr>
    <form method="post">
        ведите 6 любых чисел от 1 до 36
        <tr>
            <td>1-е <input type="text" name="numb1"></td>
            <td>2-е <input type="text" name="numb2"></td>
            <td>3-е <input type="text" name="numb3"></td>
            <td>4-е <input type="text" name="numb4"></td>
            <td>5-е <input type="text" name="numb5"></td>
            <td>6-е <input type="text" name="numb6"></td>
        </tr>
        <?php
    $numb1= new CLottery($_POST);
    $numb1->checklottery();
}
?>
</body>
</html>
