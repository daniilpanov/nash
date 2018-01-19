<h1 align="middle" style="text-decoration: underline">Редактор вопросов викторины</h1>

<h3 align="middle">Вы можете:</h3>
<center>
    <a class="new" style="background-color: green" href="?page=victorinaadd&level=new">Добавить</a>
    <a class="new" style="background-color: blue" href="?page=victorinaadd&level=add">Редактировать</a>
    <a class="new" style="background-color: #bb0000" href="?page=victorinaadd&level=delete">Удалить</a>
</center>

<?php
$z = new CVictorina();
if ($_GET['level'])
{
    $data = $answer->doing($_GET['level']);
}