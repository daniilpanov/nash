<?php
$kostu="kostu/";
$lottery="views/VLottery.php";
$victorina="vievs/VVictorina.php";
$Pifagor="views/VPifagor";
?>
<form method="get">
    <a class="btn btn-primary btn" href="?in=<?=$kostu?>" role="button">игра в кости...</a><br>
    <a class="btn btn-primary btn" href="?in=<?=$lottery?>" role="button">Лотерея</a><br>
    <a class="btn btn-primary btn" href="?in=<?=$victorina?>" role="button">Викторина</a><br>
    <a class="btn btn-primary btn" href="?in=<?=$Pifagor?>" role="button">Таблица Пифагора</a><br>
    <a href="index.php"><b>на главную страницу</b></a>
</form>
<?php
if ($_GET['in'] == $kostu){
    require_once "kostu/index.php";
}
if ($_GET['in'] == $lottery){
    require_once "views/VLottery.php";
}
if ($_GET['in'] == $victorina){
    require_once "views/VVictorina.php";
}
if ($_GET['in'] == $Pifagor){
    require_once "views/VPifagor.php";
}
