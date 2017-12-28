<?php
if (!$_POST){
    ?><form method="post">
        <table class="X">
            <tr>
                <td id='2'>
                    <p id='tr'>Введите кол-во строчек</p>
                    <input type="number" name="td">
                </td>
            </tr>
            <tr>
                <td id='2'>
                    <p id='td'>Введите кол-во столбцов</p>
                    <input type="number" name="tr">
                </td>
            </tr>
            <tr><td><h1><input type="submit" value="Создать"></h1></td></tr>
        </table>
    </form>
<?php
}
else{
    if($_POST && !empty($_POST))
    {
        echo "<table class=\"X\">";
        for($tr=1;$tr<=$_POST['tr'];$tr++){
            echo "<tr>";
            if ($tr == 1){
                for ($td=1;$td<=$_POST['td'];$td++){
                    echo "<td class='first'>";
                    if ($td!=1){
                        echo $td;
                    }
                    echo "</td>";
                }
            }
            else{
                for ($td=1;$td<=$_POST['td'];$td++){
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