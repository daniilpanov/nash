<?php

//Таблица Пифагора
function pifagorTable($row,$col)
{
    echo "<table>";
        for ($i = 1; $i <= $row; $i++) {
            echo "<tr>";
            if ($i == 1) {
                for ($j = 1; $j <= $col; $j++) {
                    echo "<td class='first'>" . $j . "</td>";
                }
            } else {
                for ($j = 1; $j <= $col; $j++) {
                    echo "<td>" . $i * $j . "</td>";
                }
            }
            echo "</tr>";
        }
    echo "</table>";
}