<form method="post">
    Логин: <input type="text" name="login"><br>
    Пароль <input type="password" name="parol"><br>
    <input type="submit" value="Войти"><br>
<?php
// вход на сайт
$lp = "robot";
$pp = "r1";

$l = $_POST['login'];
$p = $_POST['parol'];

if($l == $lp && $p == $pp){
    echo "Добро пожаловать";
}
else{
    echo "Ты кто такой?";
}