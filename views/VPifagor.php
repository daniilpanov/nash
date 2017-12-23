<form method="post">
    <center>
        <table class="X">
            <tr>
                <td id='2'>
                    <p id='tr'>Введите кол-во строчек</p>
                    <input type="text" name="td">
                </td>
            </tr>
            <tr>
                <td id='2'>
                    <p id='td'>Введите кол-во столбцов</p>
                    <input type="text" name="tr">
                </td>
            </tr>
            <tr><td><h1><input type="submit" value="Создать"></h1></td></tr>
        </table>
    </center>
</form>
<center>

        <?php
        if(is_numeric($_POST['tr'])&& is_numeric($_POST['td']))
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
        else
        {
            die("Введите, пожалуйста, цифры!!!");
        }

        ?>

</center>