<?php
class M_CVictorina extends Db
{
    public function getAnswer()
    {
        if ($_GET['level'] == 'new')
        {
            $sql = "INSERT INTO `answers`
            (question, response1, response2, response3, response4, valid_responce)
            VALUES
            ('{$_POST["question"]}', '{$_POST["resp1"]}', '{$_POST["resp2"]}', '{$_POST["resp3"]}', '{$_POST["resp4"]}', '{$_POST["v_resp"]}')";
            $result = $this->sql($sql);
            return $result;
        }
        elseif ($_GET['level'] == 'add')
        {

        }
        elseif ($_GET['level'] == 'delete')
        {
            $sql = "DELETE FROM `answers`";
        }
    }
}