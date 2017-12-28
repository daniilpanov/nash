<?php

//Таблица Пифагора
function pifagorTable($row,$col)
{
    if($row &&$col && !empty($row && $col))
    {
        echo "<table class=\"X\">";
        for($tr=1;$tr<=$row;$tr++){
            echo "<tr>";
            if ($tr == 1){
                for ($td=1;$td<=$col;$td++){
                    echo "<td class='first'>";
                    if ($td!=1){
                        echo $td;
                    }
                    echo "</td>";
                }
            }
            else{
                for ($td=1;$td<=$col;$td++){
                    if($td==1){
                        echo "<td class='first'>";
                    }
                    else{
                        echo "<td id='2'>";
                    }

                    echo $tr*$td;
                    echo "</td>";
                }
            }

            echo "</tr>";
        }
        echo "</table>";
    }
}