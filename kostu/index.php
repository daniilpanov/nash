<h1>Кости</h1>
<?php
$box1=rand (1,6);
$box2=rand(1,6);
$summa=$box1+$box2;
?>
<img src="kostu/ris<?=$box1?>.gif">
<img src="kostu/ris<?=$box2?>.gif">
<table>
    <tr><td><br><b>Сумма на кубиках равна:<?=$summa;?></b></td></tr>
</table>



<style>
    td{
        background-color: white;
    }
</style>