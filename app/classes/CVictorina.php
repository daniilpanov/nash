<?php
namespace app\classes;

class CVictorina extends MVicrorina
{

    public function getOneAnswer($id)
    {

        $answer = $this->getAnswer($id);
        return $answer;
    }
}
