<body>
<?

require_once "menu.php";



if ($_GET['in'] == "kostu"){
    require_once "kostu/index.php";
}
if ($_GET['in'] == "lottery"){
    require_once "views/VLottery.php";
}
if ($_GET['in'] == "victorina"){
    require_once "views/VVictorina.php";
}
if ($_GET['in'] == "Pifagor"){
    require_once "views/VPifagor.php";
}
if ($_GET['in'] == "Time"){
    require_once "lib/Time.php";
    ?>
    <center>
        <span id="doc_time">
            Дата и время
        </span>
    </center>
    <script>
        clock();
    </script>
    <?php
}

?>
</body>
