
<?php

class MVicrorina extends Db
{

    protected function getAnswer($id)
    {

        $sql = "SELECT * FROM answers WHERE id={$id}";
        $result = $this->sql($sql);
        return $result;


    }
}
