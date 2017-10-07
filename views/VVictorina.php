
<?php
require_once "../header.php";
function __autoload($class_name)
{
    require_once("../classes/".$class_name . ".php");
}
// подключимся к БД
$connectDB = new Db();
$answers = new CVictorina();

$good =1;

for($id=1;$id<=$good;$id++)
{
    $data = $answers->getoneAnswer($id);
    foreach ($data as $value)
    if($_GET){
        $user_responce = $_GET['response'];
        if($user_responce == $value['valid_responce']){
            echo "Правильный ответ";
            $good++;

        }
        else{
            echo "Вы проиграли";
        }
    }

    ?>
    <div class="jumbotron">
        <p><?=$value['question']?></p>
    </div>


    <a class="btn btn-primary btn-lg" href="?response=<?=$value['response1'];?>" role="button"><?=$value['response1'];?></a>
    <a class="btn btn-primary btn-lg" href="?response=<?=$value['response2'];?>" role="button"><?=$value['response2'];?></a>
    <a class="btn btn-primary btn-lg" href="?response=<?=$value['response3'];?>" role="button"><?=$value['response3'];?></a>
    <a class="btn btn-primary btn-lg" href="?response=<?=$value['response4'];?>" role="button"><?=$value['response4'];?></a>
<?php

}
require_once "../footer.php";