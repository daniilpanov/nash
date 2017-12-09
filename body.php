<style type="text/css">
    .p {
    }
</style>
<body>
<div class="col-md-2 p">

</div>
<div class="col-md-10 p">

</div>
<div class="col-md-2 head">
    <?=require_once "menu.php";?>
</div>
<div class="col-md-10 head">
    <?
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
        ?>
        <script type="text/javascript" src="lib/Time.js"></script>
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
</div>