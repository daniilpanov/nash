<?php

class CPifagor
{
    public function tableB(){
    ?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <title>MAKE A TABLE OF PIFAGOR!!!</title>
    <link href="../style/pifagor.css" rel="stylesheet">
</head>
<body>

<?php
        if ($_POST) {
            echo "<table>";
                require_once "../views/VVicrorina.php";
            echo "</table>";
        }
?>
</body>
</html>
<?php
    }
}