<?php
// будем использовать сессии
session_start();
// создадим новый обьект нашей викторины
$answers = new \app\classes\CVictorina();

// проверим запустили ли викторину впервые
if(!$_GET['go'])
{
    $id = 1;
}
else
{
    $id = $_GET['go'];
}

// обьявим сессионные переменные
if(!$_SESSION['right'])
{
    $_SESSION['right'] = 0;
}

if(!$_SESSION['wrong'])
{
    $_SESSION['wrong'] = 0;
}


// сколько раз мы можем сделать ошибку
if($_SESSION['wrong']<3)
{
    // получим один вопрос с ответами
    $data = $answers->getoneAnswer($id);

    // приведём к массиву
    foreach ($data as $value);

    // если в вопросы закончились
    if(empty($value['id']))
    {
        // обнуляем статистику
        $_SESSION['right']=null;
        $_SESSION['wrong']=null;
        echo "<h1>Вы победили!!!</h1>";
        echo '<a class="btn btn-primary btn-lg" href="index.php?page=victorina" role="button">Сиграть еще</a>';
        die();
    }

    // если пользователь выбрал ответ
    if($_GET['response']){
        $user_responce = $_GET['response'];

        // проверим
        if($user_responce == $value['valid_responce']) {
            $answ = "Правильный ответ!";
            $_SESSION['right']++;
            $id++;
        }
        else{
            $answ = "Неправильный ответ.";
            $_SESSION['wrong']++;
            $id++;
        }

    }
 ?>
    <h1><?=$answ;?></h1>
    <div class="jumbotron">
        <p id="1"><?=$value['question']?></p>
    </div>


    <a class="btn btn-primary btn-lg" href="?page=victorina&go=<?=$id;?>&response=<?=$value['response1'];?>" role="button"><?=$value['response1'];?></a>
    <a class="btn btn-primary btn-lg" href="?page=victorina&go=<?=$id;?>&response=<?=$value['response2'];?>" role="button"><?=$value['response2'];?></a>
    <a class="btn btn-primary btn-lg" href="?page=victorina&go=<?=$id;?>&response=<?=$value['response3'];?>" role="button"><?=$value['response3'];?></a>
    <a class="btn btn-primary btn-lg" href="?page=victorina&go=<?=$id;?>&response=<?=$value['response4'];?>" role="button"><?=$value['response4'];?></a>
    <a class="btn btn-primary btn-lg" href="?page=victorina&go=<?=$id;?>" role="button">Далее</a>


    <center>
        <table class="X">
            <tr>
                <td>
                    <p>Правильных ответов <?=$_SESSION['right']?></p>
                    <p>Неправильных ответов <?=$_SESSION['wrong']?></p>
                </td>
            </tr>
        </table>


    </center>

<?php
}
// если пользователь сделал больше ошибок чем допустимо
else
{
?>
    <center>
        <table class="X">
            <tr>
                <td>
                    <p>Правильных ответов <?=$_SESSION['right']?></p>
                    <p>Неправильных ответов <?=$_SESSION['wrong']?></p>
                </td>
            </tr>
        </table>


    </center>
<?php

    echo"<h1>Вы проиграли!!!</h1>";
    // обнуляем статистику
    $_SESSION['right']=null;
    $_SESSION['wrong']=null;

}

?>
