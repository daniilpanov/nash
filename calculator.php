<?php
session_start();
if (!$_SESSION['now'])
{
    $_SESSION['now'];
}

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Калькулятор|Сайт"НАШ"</title>
    <link rel="stylesheet" href="calculator.css">
</head>
<body>
<?php
for ($c=0;$c<=9;$c++){
    $number[$c] = $c;
}
if (!empty($_SESSION['now'])){
    if ($_GET['n']){
        $_SESSION['now'] = $_SESSION['now']*10+$_GET['n'];
    }
    elseif ($_GET['fl']){
        $_SESSION['now'] = $_SESSION['now'].''.$_GET['fl'];
    }
    elseif ($_GET['c']){
        $_SESSION['now'] = ($_SESSION['now']-$_GET['c'])/10;
    }
    elseif ($_GET['do']){
        $_SESSION['now'] = $_SESSION['now'].''.$_GET['do'];
    }
    elseif ($_GET['take']){
        die("<h1>Вы получили число ".$_SESSION['now']."</h1>");
    }
    elseif ($_GET['null']){
        unset($_SESSION['now']);
    }
}
elseif (empty($_SESSION['now'])){
    if ($_GET['n']){
        $_SESSION['now'] = $_GET['n'];
    }
    elseif ($_GET){
        echo "<h1>Введите число!</h1>";
    }
}


?>
<center>
    <table>
        <thead><a href="?null">Полный сброс</a></thead>
        <tr>
            <td><div><h1><?=$_SESSION['now']?></h1></div></td>
            <td><h1><a href="?c">C</a></h1></td>
        </tr>
    </table>
</center>
    <center><table>

        <tr>
            <td><h1><a href="?n=<?=$number[1]?>"><?=$number[1]?></a></h1></td>
            <td><h1><a href="?n=<?=$number[2]?>"><?=$number[2]?></a></h1></td>
            <td><h1><a href="?n=<?=$number[3]?>"><?=$number[3]?></a></h1></td>
            <td><h1><a href="?do=+">+</a></h1></td>
            <td><h1><a href="?do=**">степень</a></h1></td>
        </tr>
        <tr>
            <td><h1><a href="?n=<?=$number[4]?>"><?=$number[4]?></a></h1></td>
            <td><h1><a href="?n=<?=$number[5]?>"><?=$number[5]?></a></h1></td>
            <td><h1><a href="?n=<?=$number[6]?>"><?=$number[6]?></a></h1></td>
            <td><h1><a href="?do=-">-</a</h1></td>
        </tr>
        <tr>
            <td><h1><a href="?n=<?=$number[7]?>"><?=$number[7]?></a></h1></td>
            <td><h1><a href="?n=<?=$number[8]?>"><?=$number[8]?></a></h1></td>
            <td><h1><a href="?n=<?=$number[9]?>"><?=$number[9]?></a></h1></td>
            <td><h1><a href="?do=*">*</a></h1></td>
        </tr>
        <tr>
            <td><h1><a href="?fl=.">.</a></h1></td>
            <td><h1><a href="?n=<?=$number[0]?>"><?=$number[0]?></a></h1></td>
            <td><h1><a href="?take==">=</a></h1></td>
            <td><h1><a href="?do=/">/</a></h1></td>
        </tr>
    </table></center><hr>
</body>
</html>