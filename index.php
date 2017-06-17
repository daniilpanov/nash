<h6> логин</h6>
<a href="kostu/">игра в кости</a>

<form method="post">
Как вас зовут?
<input type="text" name="imja"><br>
Сколько вам лет?
<input type="text" name="vozr"><br>
<input type="submit" value="ok">
</form>

<?php

$name1 = $_POST['imja'];
$vozr1 = $_POST['vozr'];


echo "Меня зовут ".$name1." и мне ".$vozr1." лет.<br>";

?>