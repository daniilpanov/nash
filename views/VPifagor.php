<!DOCTYPE html>
<html lang="ru">
<head><link href="../style/pifagor.css" rel="stylesheet"></head>
<body>
<form method="post">
    <center>
        <table>
            <tr>
                <td>
                    <p id="tr">Введите кол-во строчек</p>
                    <input type="text" name="tr">
                </td>
            </tr>
            <tr>
                <td>
                    <p id="td">Введите кол-во столбцов</p>
                    <input type="text" name="td">
                </td>
            </tr>
            <tr><td><h1><input type="submit" value="Создать"></h1></td></tr>
        </table>
    </center>
</form>
<center>
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
</center>


</body>
</html>
