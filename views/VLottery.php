<!DOCTYPE html>
<html lang="ru">

<head>

    <title>ЛОТЕРЕЯ</title>

    <!--CSS-->
    <link href="../style/lottery.css" rel="stylesheet" />
    <!--End CSS--><!DOCTYPE html>
</head>

<body>
<?php
function __autoload($class_name)
{
    require_once("../classes/".$class_name . ".php");
}

if(!$_POST) {?>

    <center><table>
    <tr>
    <td><h1>ЛОТЕРЕЯ!</h1></td>
    </tr>
    <tr>
    <td><h3>6 из 36</h3></td>
    </tr>
    </table></center>

    <form method="post">
        введите 6 любых чисел от 1 до 36
        <center>
            <table>
                <tr>
                    <td>1-е <input type="text" name="numb1"></td>
                    <td>2-е <input type="text" name="numb2"></td>
                    <td>3-е <input type="text" name="numb3"></td>
                    <td>4-е <input type="text" name="numb4"></td>
                    <td>5-е <input type="text" name="numb5"></td>
                    <td>6-е <input type="text" name="numb6"></td>
                    <td><input type="submit" value="Проверить"></td>
                </tr>
            </table>
        </center>
    </form>
    <?php
}
if ($_POST>36){
    die("<p>Вы ввели число, которое больше 36</p>");
}
else{
    $lottery= new CLottery($_POST);
    $lottery->checklottery();
}
?>
</body>
</html>
