<?php
namespace app\classes;

class MVictorina
{
    // Если пользователь добавляет вопрос
    public function NewAnswer($data)
    {
        $sql = "INSERT INTO `answers`
        (question, response1, response2, response3, response4, valid_responce)
        VALUES
        ('{$data["question"]}', '{$data["resp1"]}', '{$data["resp2"]}', '{$data["resp3"]}', '{$data["resp4"]}', '{$data["v_resp"]}')";
        $result = \app\classes\Db::getInstance()->sql($sql);
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