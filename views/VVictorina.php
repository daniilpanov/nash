
<?php
// У меня почему-то не работает это.
# Даже то, что было на GitHub, хотя раньше - работало.

require_once "../header.php";
function __autoload($class_name)
{
    require_once("../classes/".$class_name . ".php");
}
// подключимся к БД
$connectDB = new Db();
$answers = new CVictorina();

for ($id=1;$id>=99;)
{
    $data = $answers->getoneAnswer($id);
    foreach ($data as $value)

    $time;
    if($_GET){
        $user_responce = $_GET['response'];
        if($user_responce == $value['valid_responce']){
            function IdTime($id,$time){
                $id++;
                $time--;
            }
            ?>
            <script>
                setTimeout(function IdTime,5000,$id)
            </script>
            <?php

            $answ = "Правильный ответ! Через ".$time."Вы перейдёте к следующему заданию.";
            if ($time == 0){
                $answ ="";
            }
        }

    }

}

?>
<h1><?=$answ;?></h1>
<div class="jumbotron">
    <p><?=$value['question']?></p>
</div>


<a class="btn btn-primary btn-lg" href="?response=<?=$value['response1'];?>" role="button"><?=$value['response1'];?></a>
<a class="btn btn-primary btn-lg" href="?response=<?=$value['response2'];?>" role="button"><?=$value['response2'];?></a>
<a class="btn btn-primary btn-lg" href="?response=<?=$value['response3'];?>" role="button"><?=$value['response3'];?></a>
<a class="btn btn-primary btn-lg" href="?response=<?=$value['response4'];?>" role="button"><?=$value['response4'];?></a>
<?php
require_once "../footer.php";