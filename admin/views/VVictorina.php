<h1 align="middle" style="text-decoration: underline">Редактор вопросов викторины</h1>

<h3 align="middle">Вы можете:</h3>
<center>
    <a class="new" style="background-color: green" href="?page=victorinaadd&level=new">Добавить</a>
    <a class="new" style="background-color: blue" href="?page=victorinaadd&level=add">Редактировать</a>
    <a class="new" style="background-color: #bb0000" href="?page=victorinaadd&level=delete">Удалить</a>
</center>

<?php
if ($_GET['level'])
{
    if ($_GET['level'] == 'new')
    {
        ?>
        <form method="post">
            <input type="text" name="question" placeholder="ВОПРОС">
            <input type="text" name="resp1" placeholder="ОТВЕТ №1">
            <input type="text" name="resp2" placeholder="ОТВЕТ №2">
            <input type="text" name="resp3" placeholder="ОТВЕТ №3">
            <input type="text" name="resp4" placeholder="ОТВЕТ №4">
            <input type="text" name="v_resp" placeholder="ПРАВИЛЬНЫЙ ОТВЕТ" style="background-color: darkblue">
            <input type="submit" value="Отправить">
        </form>
        <?php
        $sql = "INSERT INTO answers (question, response1, response2, response3, response4, valid_responce) 
        VALUES ('{$_POST['question']}','{$_POST['resp1']}','{$_POST['resp2']}','{$_POST['resp3']}','{$_POST['resp4']}','{$_POST['v_resp']}')";
    }
}