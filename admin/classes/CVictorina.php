<?php

class CVictorina extends MVicrorina
{
    public function doing()
    {
        // Проверка запроса пользователя
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
                    <input type="submit" name="go" value="Отправить">
                </form>
                <?php
                if($_POST['go'])
                {
                    $answer = $this->NewAnswer($_POST, $_GET);
                    return $answer;
                }

            }
            elseif ($_GET['level'] == 'add')
            {
                ?>
                <form method="post">
                    <input type="text" name="key" placeholder="ID">
                    <input type="text" name="question" placeholder="ВОПРОС">
                    <input type="text" name="resp1" placeholder="ОТВЕТ №1">
                    <input type="text" name="resp2" placeholder="ОТВЕТ №2">
                    <input type="text" name="resp3" placeholder="ОТВЕТ №3">
                    <input type="text" name="resp4" placeholder="ОТВЕТ №4">
                    <input type="text" name="v_resp" placeholder="ПРАВИЛЬНЫЙ ОТВЕТ" style="background-color: darkblue">
                    <input type="submit" name="go" value="Отправить">
                </form>
                <?php
                if ($_POST['go'])
                {
                    $answer = $this->AddAnswer($_POST, $_GET);
                    return $answer;
                }
            }
            elseif ($_GET['level'] == 'delete')
            {
                ?>
                <form method="post">
                    <input type="text" name="question" placeholder="НОМЕР СТРОКИ">
                    <input type="submit" name="go" value="Отправить">
                </form>
                <?php
                if ($_POST['go'])
                {
                    $answer = $this->DeleteAnswer($_GET, $_POST);
                    return $answer;
                }
            }
        }
    }
}
