<h1 align="middle" style="text-decoration: underline">Редактор вопросов викторины</h1>

<h3 align="middle">Вы можете:</h3>
<div class="victorinaadmin">
    <a class="new" style="background-color: green" href="?page=victorinaadd">Добавить</a>
    <a class="new" style="background-color: blue" href="?page=victorinaedit">Редактировать</a>
    <a class="new" style="background-color: #bb0000" href="?page=victorinadel">Удалить</a>
</div>

<?php
$z = new CVictorina();
if ($_GET['level'])
{
    $data = $answer->doing($_GET['level']);
}