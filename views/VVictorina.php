<?php
function __autoload($class_name)
{
require_once("../classes/".$class_name . ".php");
}

// подключимся к БД
$connectDB = new Db();
$answers = new CVictorina();
$data = $answers->getoneAnswer(1);

foreach ($data as $value){


       // $answers[] = $value;


}
echo "<PRE>";
var_dump($value);
echo "</PRE>";

?>

<form method="post">
    <input type="text" name="">
    <input type="submit" value="продолжить">
</form>

