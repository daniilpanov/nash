<?php

if(!$_POST) {
    ?>

    <center><table>
        <tr>
            <td><h1>ЛОТЕРЕЯ!</h1></td>
        </tr>
        <tr>
            <td><h3>6 из 36</h3></td>
        </tr>
    </table></center>

    <form method="post">
        введите 6 любых чисел от 1 до 36
        <center>
            <table id="1">
                <tr>
                    <td>1-е <input type="text" name="numb1"></td>
                    <td>2-е <input type="text" name="numb2"></td>
                    <td>3-е <input type="text" name="numb3"></td>
                    <td>4-е <input type="text" name="numb4"></td>
                    <td>5-е <input type="text" name="numb5"></td>
                    <td>6-е <input type="text" name="numb6"></td>
                    <td><input type="submit" value="Проверить"></td>
               </tr>
           </table>
        </center>
    </form>
    <?php
}
if($_POST['numb1']>36 || $_POST['numb2']>36 || $_POST['numb3']>36 || $_POST['numb4']>36 || $_POST['numb5']>36 || $_POST['numb6']>36){
    echo "<p>Вы ввели число, которое больше 36.<a href=\"VLottery.php\"><b><i>Сыграть ещё раз</i></b></a></p>";
}
elseif($_POST){
    $lottery= new CLottery($_POST);
    $lottery->checklottery();
    echo "<a href=\"VLottery.php\"><b><i>Сыграть ещё раз</i></b></a>";
}
else{
    echo "Введите в поля числа!";
}
