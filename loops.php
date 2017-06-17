<form method="post">
    Введите число <input type="text" name="chislo"><br>
    <input type="submit" value="OK">
</form>


<?php

$chislo = $_POST["chislo"];

function print_chisla($k){
    for($i=1;$i<=$k;$i++){
        if($i%2!=0){
            echo $i."<br>";
        }

    }
}

print_chisla($chislo);

