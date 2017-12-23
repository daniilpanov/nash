<body>
<div class="row header">
    <div class="col-md-2 mycol"><img src="img/logo.png" height="150px"></div>
    <div class="col-md-10"><h1 class="sitename">Название сайта</h1></div>
</div>
<div class="row">
    <div class="col-md-2 menu">
<?

require_once "menu.php";

?>
    </div>
    <div class="col-md-10"></div>


        <?php

if ($_GET['in'] == "kostu"){
    require_once "kostu/index.php";
}
elseif ($_GET['in'] == "lottery"){
    require_once "views/VLottery.php";
}
elseif ($_GET['in'] == "victorina"){
    require_once "views/VVictorina.php";
}
elseif ($_GET['in'] == "Pifagor"){
    require_once "views/VPifagor.php";
}
elseif ($_GET['in'] == "Time"){
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
else{
    echo "test";
}

?>
</div>
</body>
