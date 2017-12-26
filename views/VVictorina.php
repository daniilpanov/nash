<?php
// подключимся к БД
$answers = new CVictorina();
$id=1;
$ansvers_right = 0;
$ansvers_wrong = 0;
while ($id>=99)
{
    $data = $answers->getoneAnswer($id);
    foreach ($data as $value);
    if($_GET){
        $user_responce = $_GET['response'];
        if($user_responce == $value['valid_responce']) {
            $answ = "Правильный ответ!";
            $ansvers_right++;
        }
        else{
            $answ = "Неправильный ответ.";
            $ansvers_wrong++;
        }
        if ($_GET['go']){
            $answ ="";
            $id++;
        }
    }
}

?>
<h1><?=$answ;?></h1>
<div class="jumbotron">
    <p id="1"><?=$value['question']?></p>
</div>


<a class="btn btn-primary btn-lg" href="?response=<?=$value['response1'];?>" role="button"><?=$value['response1'];?></a>
<a class="btn btn-primary btn-lg" href="?response=<?=$value['response2'];?>" role="button"><?=$value['response2'];?></a>
<a class="btn btn-primary btn-lg" href="?response=<?=$value['response3'];?>" role="button"><?=$value['response3'];?></a>
<a class="btn btn-primary btn-lg" href="?response=<?=$value['response4'];?>" role="button"><?=$value['response4'];?></a>
<a class="btn btn-primary btn-lg" href="?go=then" role="button">Далее</a>
<center>
    <table class="X">
        <tr>
            <td>
                <p>Правильных ответов<?=$ansvers_right?></p>
                <p>Неправильных ответов<?=$ansvers_wrong?></p>
            </td>
        </tr>
    </table>


</center>