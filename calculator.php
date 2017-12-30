<?php
for ($c=0;$c<=9;$c++){
    $number[$c] = $c;
}

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Калькулятор|Сайт"НАШ"</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="calculator.css">
</head>
<body>
<table>
    <tr>
        <td><?=$rezult?></td>
        <td><h1><a href="?c">C</a></h1></td>
    </tr>
</table>
<table>
    <tr>
        <td><h1><a href="?n=<?=$number[1]?>"><?=$number[1]?></a></h1></td>
        <td><h1><a href="?n=<?=$number[2]?>"><?=$number[2]?></a></h1></td>
        <td><h1><a href="?n=<?=$number[3]?>"><?=$number[3]?></a></h1></td>
        <td><h1><a href="?do=+">+</a></h1></td>
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
        <td><h1><a href="?n=.">.</a></h1></td>
        <td><h1><a href="?n=<?=$number[0]?>"><?=$number[0]?></a></h1></td>
        <td><h1><a href="?take==">=</a></h1></td>
        <td><h1><a href="?do=/">/</a></h1></td>
    </tr>
</table>

<?php
for ($a=1;$a<=15;$a++){
    $rezult[$a] = 0;
}

if ($_GET){
    $taked = $_GET;
    $a = 1;
    if ($_GET['n']) {
        $rezult[$a] = $rezult * 10 + $taked;
    }
    if ($_GET['c']){
        $rezult[$a] = $rezult-$taked/10;
    }
    if ($_GET['do']){
        $rezult[$a]=$rezult[$a]{$taked};
        $a++;
    }
    if ($_GET['take']){
        die("<a href=\"calculator.php\"><b>заного</b></a>");
    }
}
?>
</body>
</html>
