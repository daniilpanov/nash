<h1>Кости</h1>
<a href ="../">наш</a>

<?php
$box1=rand (1,6);
$box2=rand(1,6);
$summa=$box1+$box2;

echo "<img src=\"ris".$box1.".gif\">";
echo "<img src=\"ris".$box2.".gif\">";

echo "<br>Сумма на кубиках равна: ".$summa;
