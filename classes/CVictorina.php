<?php

class CVictorina extends MVicrorina
{
    public function getoneAnswer($id)
    {

        $answer = $this->getAnswers($id);
        return $answer;
    }
}
