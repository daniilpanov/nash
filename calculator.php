<!DOCTYPE html>
<html lang="ru">
<?php
for ($c=0;$c<=9;$c++){
    $number[$c] = $c;
}
$id = 1;
$last_rezult = "";
$rezult[$id] = 0;
if ($rezult != 0){
    if ($_GET['n']) {
        $last_rezult = $rezult[$id];
        $id++;
        $rezult[$id] = $last_rezult."".$_GET['n'];
    }
    elseif ($_GET['fl']){
        $last_rezult = $rezult[$id];
        $id++;
        $rezult[$id] = $last_rezult."".$_GET['fl'];
    }
    elseif ($_GET['c']){
        $last_rezult = $rezult[$id];
        $id++;
        $rezult[$id] = ($last_rezult-$_GET['c'])/10;
    }
    elseif ($_GET['do']){
        $last_rezult = $rezult[$id];
        $id++;
        $rezult[$id] = $last_rezult."".$_GET['do'];
    }
    elseif ($_GET['take']){
        echo "<h1>".$rezult[$id]."</h1>";
    }
}
elseif ($rezult[$id] == 0){
    if ($_GET['n']){
        $rezult[$id] = "";
        $rezult[$id] = $_GET['n'];
    }
    else{
        echo "<h1>Введите число!</h1>";
    }
}


?>

<head>
    <title>Калькулятор|Сайт"НАШ"</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="calculator.css">
</head>
<body>
<center>
    <table>
        <tr>
            <td><div><h1><?=$rezult[$id]?></h1></div></td>
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
    </table></center>

</body>
</html>
