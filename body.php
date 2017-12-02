<body >
<?
require_once "menu.php";



if ($_GET['in'] == "kostu"){
    require_once "kostu/index.php";
}
if ($_GET['in'] == "lottery"){
    require_once "views/VLottery.php";
}
if ($_GET['in'] == 'victorina'){
    echo "victorina";
    require_once "views/VVictorina.php";
}
if ($_GET['in'] == "Pifagor"){
    require_once "views/VPifagor.php";
}

?>
</body>
