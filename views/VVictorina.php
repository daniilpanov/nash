
<?php
require_once "../header.php";
function __autoload($class_name)
{
    require_once("../classes/".$class_name . ".php");
}

$answers = new CVictorina();

    $id=1;
    do
    {

        $data = $answers->getoneAnswer($id); // получили ответы на один вопрос

        $user_responce = $_GET['response'];

        foreach ($data as $value){}

        // проверяем правильный ли ответ
        if ($user_responce == $value['valid_responce'])
        {
            $answ = "Правильный ответ";
            $id++;

        } else {
            //$answ = "Вы проиграли";
            $id = 6;
        }

    }
    while($id<=5);


?>
<h1><?=$answ;?></h1>
<div class="jumbotron">
    <p><?=$value['question']?></p>
</div>


<a class="btn btn-primary btn-lg" href="?response=<?=$value['response1'];?>" role="button"><?=$value['response1'];?></a>
<a class="btn btn-primary btn-lg" href="?response=<?=$value['response2'];?>" role="button"><?=$value['response2'];?></a>
<a class="btn btn-primary btn-lg" href="?response=<?=$value['response3'];?>" role="button"><?=$value['response3'];?></a>
<a class="btn btn-primary btn-lg" href="?response=<?=$value['response4'];?>" role="button"><?=$value['response4'];?></a>
<?php require_once "../footer.php";