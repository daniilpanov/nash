<form method="post">
    <table>
        <tr>
            <td>
                <p id="tr">Введите кол-во строчек</p>
                <p id="td">Введите кол-во столбцов</p>
            </td>
        </tr>
        <tr>
            <td>
                <input type="text" name="tr">
                <input type="text" name="td">
            </td>
        </tr>
        <tr><td><h1><input type="submit" value="Создать"></h1></td></tr>
    </table>
</form>
<table>
<?php
for($tr=1;$tr<=$_POST['tr'];$tr++){
    echo "<tr>";
    if ($tr == 1){
        for ($td=1;$td<=$_POST['td'];$td++){
            echo "<td>";
            echo $td;
            echo "</td>";
        }
    }
    else{
        for ($td=1;$td<=$_POST['td'];$td++){
            echo "<td>";
            echo $tr*$td;
            echo "</td>";
        }
    }

    echo "</tr>";
}
?>
</table>
