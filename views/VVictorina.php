
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
            $answ = "Правильный ответ";
            $good++;
            /*?>
            <a class ="btn btn-primary btn-lg" href="?then <?=$user?>" role="button"><h3>Далее</h3></a>

            <?php
            if ($user !=  $i){
                die();
            }
*/
        }
        else/*if($user_responce != $user)*/{
            $answ = "Вы проиграли";
        }
        /*else{
            $answ = "Правильный ответ";
        }

         */
    }

}
require_once "../footer.php";
?>
<h1><?=$answ;?></h1>
<div class="jumbotron">
    <p><?=$value['question']?></p>
</div>


<a class="btn btn-primary btn-lg" href="?response=<?=$value['response1'];?>" role="button"><?=$value['response1'];?></a>
<a class="btn btn-primary btn-lg" href="?response=<?=$value['response2'];?>" role="button"><?=$value['response2'];?></a>
<a class="btn btn-primary btn-lg" href="?response=<?=$value['response3'];?>" role="button"><?=$value['response3'];?></a>
<a class="btn btn-primary btn-lg" href="?response=<?=$value['response4'];?>" role="button"><?=$value['response4'];?></a>
