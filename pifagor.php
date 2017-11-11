<table>

<?php
$tr = 20;
$td = 20;


for ($i=1;$i<=$tr;$i++)
{
    echo "<tr>";
        if($i==1)
        {
            for ($j=1;$j<=$td;$j++)
            {
                echo "<td>".$j."</td>";
            }
        }
        else
        {
            for ($j=1;$j<=$td;$j++)
            {
                echo "<td>".$i*$j."</td>";
            }
        }
    echo "</tr>";
}

?>
</table>