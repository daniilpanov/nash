<center><table>
        <tr>
            <td><h1>РУЛЕТКА!</h1></td>
        </tr>
        <tr>
            <td><h3>6 из 36</h3></td>
        </tr>
    </table></center>
<?php

if(!$_POST) {
    ?>
    <form method="post">
        введите 6 любых чисел от 1 до 36
        <center>
            <table id="1">
                <tr>
                    <td class="user">1-е</td>
                    <td class="user">2-е</td>
                    <td class="user">3-е</td>
                    <td class="user">4-е</td>
                    <td class="user">5-е</td>
                    <td class="user">6-е</td>
                </tr>
                <tr>
                    <td class="user"><input class="user" type="number" name="numb1"></td>
                    <td class="user"><input class="user" type="number" name="numb2"></td>
                    <td class="user"><input class="user" type="number" name="numb3"></td>
                    <td class="user"><input class="user" type="number" name="numb4"></td>
                    <td class="user"><input class="user" type="number" name="numb5"></td>
                    <td class="user"><input class="user" type="number" name="numb6"></td>
                    <td><input type="submit" value="Проверить"></td>
               </tr>
           </table>
        </center>
    </form>
    <?php
}
else{
    if (!empty($_POST['numb1']) && !empty($_POST['numb2']) && !empty($_POST['numb3']) && !empty($_POST['numb4']) && !empty($_POST['numb5']) && !empty($_POST['numb6'])){
        if($_POST['numb1']>36 || $_POST['numb2']>36 || $_POST['numb3']>36 || $_POST['numb4']>36 || $_POST['numb5']>36 || $_POST['numb6']>36){
            ?>
            <form method="post">
                введите 6 любых чисел от 1 до 36
                <center>
                    <table id="1">
                        <tr>
                            <td class="user">1-е</td>
                            <td class="user">2-е</td>
                            <td class="user">3-е</td>
                            <td class="user">4-е</td>
                            <td class="user">5-е</td>
                            <td class="user">6-е</td>
                        </tr>
                        <tr>
                            <td class="user"><input class="user" type="number" name="numb1"></td>
                            <td class="user"><input class="user" type="number" name="numb2"></td>
                            <td class="user"><input class="user" type="number" name="numb3"></td>
                            <td class="user"><input class="user" type="number" name="numb4"></td>
                            <td class="user"><input class="user" type="number" name="numb5"></td>
                            <td class="user"><input class="user" type="number" name="numb6"></td>
                            <td><input type="submit" value="Проверить"></td>
                    </table>
                </center>
            </form>
            <?php
            echo "<p>Вы ввели число, которое больше 36";
        }
        elseif($_POST){
            $lottery= new CRoulette($_POST);
            $lottery->checklottery();
            echo "<a href=\"index.php?in=roulette\"><b><i>Сыграть ещё раз</i></b></a>";
        }
    }
    else{
        ?>
        <form method="post">
            введите 6 любых чисел от 1 до 36
            <center>
                <table id="1">
                    <tr>
                        <td class="user">1-е</td>
                        <td class="user">2-е</td>
                        <td class="user">3-е</td>
                        <td class="user">4-е</td>
                        <td class="user">5-е</td>
                        <td class="user">6-е</td>
                    </tr>
                    <tr>
                        <td class="user"><input class="user" type="number" name="numb1"></td>
                        <td class="user"><input class="user" type="number" name="numb2"></td>
                        <td class="user"><input class="user" type="number" name="numb3"></td>
                        <td class="user"><input class="user" type="number" name="numb4"></td>
                        <td class="user"><input class="user" type="number" name="numb5"></td>
                        <td class="user"><input class="user" type="number" name="numb6"></td>
                        <td><input type="submit" value="Проверить"></td>
                    </tr>
                </table>
            </center>
            </center>
        </form>
        <?php
        echo "Введите в поля числа!";
    }
}
