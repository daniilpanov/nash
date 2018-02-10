<?php
namespace app\classes;

class MVicrorina
{
    protected function getAnswer($id)
    {
        $sql = "SELECT * FROM answers WHERE id={$id}";
        $result = \app\classes\Db::getInstance()->sql($sql);
        return $result;
    }
}
