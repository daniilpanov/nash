<?php
class MVictorina extends Db
{
    // Если пользователь добавляет вопрос
    public function NewAnswer()
    {
        $sql = "INSERT INTO `answers`
        (question, response1, response2, response3, response4, valid_responce)
        VALUES
        ('{$_POST["question"]}', '{$_POST["resp1"]}', '{$_POST["resp2"]}', '{$_POST["resp3"]}', '{$_POST["resp4"]}', '{$_POST["v_resp"]}')";
        $result = $this->sql($sql);
        return $result;
    }
    // Если пользователь редактирует вопрос
    public function AddAnswer()
    {

    }
    // Если пользователь удаляет вопрос
    public function DeleteAnswer()
    {
        $sql = "DELETE FROM `answers`";
        $result = $this->sql($sql);
        return $result;
    }
}