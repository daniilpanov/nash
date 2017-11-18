<?php
$tr = $_POST["tr"];
$td = $_POST["td"];


for ($i = 1; $i <= $tr; $i++) {
    echo "<tr>";
    if ($i == 1) {
        for ($j = 1; $j <= $td; $j++) {
            echo "<td>" . $j . "</td>";
        }
    } else {
        for ($j = 1; $j <= $td; $j++) {
            echo "<td>" . $i * $j . "</td>";
        }
    }
    echo "</tr>";
}
?>
<a class="btn btn-primary btn" href="VPifagor.php" role="button">CREATE NEW TABLE></a>
}


