
<?php
// У меня почему-то не работает это.
# Даже то, что было на GitHub, хотя раньше - работало.

require_once "../header.php";
function __autoload($class_name)
{
    require_once("../classes/".$class_name . ".php");
}
// подключимся к БД
$answers = new CVictorina();
$id=1;
$right = 0;
$wrong = 0;
while ($id>=99)
{
    $data = $answers->getoneAnswer($id);
    foreach ($data as $value);
    if($_GET){
        $user_responce = $_GET['response'];
        if($user_responce == $value['valid_responce']) {
            $answ = "Правильный ответ!";
            $right++;
        }
        else{
            $answ = "Неправильный ответ.";
            $wrong++;
        }
        if ($GET['go']){
            $answ ="";
            $id++;
        }
    }
}

?>
<h1><?=$answ;?></h1>
<div class="jumbotron">
    <p><?=$value['question']?></p>
</div>


<a class="btn1 btn-primary btn-lg" href="?response=<?=$value['response1'];?>" role="button"><?=$value['response1'];?></a>
<a class="btn2 btn-primary btn-lg" href="?response=<?=$value['response2'];?>" role="button"><?=$value['response2'];?></a>
<a class="btn3 btn-primary btn-lg" href="?response=<?=$value['response3'];?>" role="button"><?=$value['response3'];?></a>
<a class="btn4 btn-primary btn-lg" href="?response=<?=$value['response4'];?>" role="button"><?=$value['response4'];?></a>
<a class="btn_dr btn-primary btn-lg" href="?go=then" role="button">Далее</a>
<center>
    <div>
        <p>Правильных ответов<?=$right?></p>
        <p>Неправильных ответов<?=$wrong?></p>
    </div
</center>
>
<?php
require_once "../footer.php";