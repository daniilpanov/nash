<?php

class CVictorina extends MVicrorina
{
    public function doing()
    {
        // Проверка запроса пользователя
        if ($_GET['level'] === 'new')
        {
            $answer = $this->NewAnswer($_POST);
            return $answer;
        }
        elseif ($_GET['level'] === 'add')
        {
            $answer = $this->AddAnswer($_POST);
        }
        elseif ($_GET['level'] === 'delete')
        {
            $answer = $this->DeleteAnswer($_POST);
        }
    }
}
