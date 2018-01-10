<body>
<div class="row header">
    <div class="col-md-2 mycol"><img src="img/php-logo.png" height="150px"></div>
    <div class="col-md-10"><h1 class="sitename"><i>The Daniil's project</i></h1></div>
</div>
<div class="row">
    <div class="col-md-2 menu">
<?

require_once "menu.php";

?>
    </div>
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
if ($_GET['page'] == "kostu"){
    require_once "kostu/index.php";
}
elseif ($_GET['page'] == "roulette"){
    require_once "views/VRoulette.php";
}
elseif ($_GET['page'] == "victorina"){
    require_once "views/VVictorina.php";

}
elseif ($_GET['page'] == "Pifagor"){
    require_once "views/VPifagor.php";
}
elseif($_GET['page'] == "myhome"){
            require_once "views/Vmyhome.php";
        }
?>
</div>
</body>
