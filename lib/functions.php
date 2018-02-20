
<?php
// Авторизация пользователей
function avt($data,$users)
{

    foreach ($users as $value)
    {
        if ($data['login'] == $value['login'] && $data['password'] == $value['password'])
        {
            $autorized = TRUE;
            $username = $value['name'];
        }

    }

    if(!$autorized)
    {
        echo "Вы неправильно ввели логин или пароль!";
    }
    else
    {
        echo "Добро пожаловать, ".$username;
    }

}