
<?php
function __autoload($class_name)
{
require_once("../classes/".$class_name . ".php");
}

// подключимся к БД
$connectDB = new Db();
$answers = new CVictorina();
$data = $answers->getoneAnswer(1);


foreach ($data as $value)
{
       //$answers[] = $value;
}

echo "<PRE>";
var_export($value);
echo "</PRE>";
// Надо вставить в кнопки ответы.
?>
<form method="post">
    <!--question-->
    <button><!--(response1)--></button>
    <button><!--(response2)--></button>
    <button><!--(response3)--></button>
    <button><!--(response4)--></button>
</form>