<!DOCTYPE html>
<html lang="ru">
<head>
    <link href="style/calculator.css" rel="stylesheet" />
</head>
<body>
<form method="get">
    <table class="calculator">
        <tr>
            <td id="head"><h1><?=$number[1]."".$znach.''.$number[2];?></h1>    <a class="btn btn-lg" href="?sbr=sbr1" role="button"><h2>C</h2></a></td>
            <td id="head"><p><?=$number['sum'];?></p></td>
        </tr>
        <tr>
            <td><a class="btn btn-lg" href="?z=1" role="button"><?=$n[1]?></a>
                <a class="btn btn-lg" href="?z=2" role="button"><?=$n[2]?></a>
                <a class="btn btn-lg" href="?z=3" role="button"><?=$n[3]?></a>
                <a class="btn btn-lg" href="?z=+" role="button">+</a></td>
        </tr>
        <tr>
            <td><a class="btn btn-lg" href="?z=4" role="button"><?=$n[4]?></a>
            <a class="btn btn-lg" href="?z=5" role="button"><?=$n[5]?></a>
            <a class="btn btn-lg" href="?z=6" role="button"><?=$n[6]?></a>
            <a class="btn btn-lg" href="?zn=-" role="button">-</a></td>

        </tr>
        <tr>
            <td><a class="btn btn-lg" href="?z=7" role="button"><?=$n[7]?></a></td>
            <a class="btn btn-lg" href="?z=8" role="button"><?=$n[8]?></a>
            <a class="btn btn-lg" href="?z=9" role="button"><?=$n[9]?></a>
            <a class="btn btn-lg" href="?zn=*" role="button">*</a></td>
        </tr>
        <tr>
            <td><a class="btn btn-lg" href="?z=." role="button">.</a>
                <a class="btn btn-lg" href="?z=0" role="button"><?=$n[0]?></a>
                <a class="btn btn-lg" href="?znachenie==" role="button">=</a>
                <a class="btn btn-lg" href="?zn=/" role="button">/</a></td>
        </tr>

    </table>
</form>
<?php

$number[1] = 0;
$n[0] = 0;
for ($i=0;$i>=9;$i++){
    $n[$i] = $i;
}
for ($a=1,$b=1;$a<$b;$a++,$b++){
    if($_GET){
        $c = 1;
        for ($d=0,$e=0;){

        }
        if ($_GET['z']){
            $number[$c]*10+$_GET['z'];
        }
        if ($_GET['zn']){
            $number[$c]{$_GET['zn']};
            $c++;
        }
    }
}


?>
</body>
</html>
