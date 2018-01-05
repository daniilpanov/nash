<style>
    input[type=submit]{
        text-underline: none;
        background-color: gold;
        padding: 1em;
        border-radius: 25px;
    }
    input[type=submit]:hover{
        text-decoration: underline;
        padding: 1.5em;
    }
    a.BACK{
        text-underline: none;
        background-color: gold;
        padding: 1em;
        margin-top: 2em;
        border-radius: 10px;
    }
    a.BACK:hover{
        text-decoration: underline;
        padding: 1.5em;
    }
    td{
        background-color: white;
    }
</style>


<? if (!$_POST){ ?><h1>Кости</h1>
<form method="post">
    <input type="submit" name="go" value="бросить кости">
</form>

<?php
}
elseif($_POST['go']){
    $box1=rand (1,6);
    $box2=rand(1,6);
    $summa=$box1+$box2;
    ?>
    <img src="img/ris<?=$box1?>.gif">
    <img src="img/ris<?=$box2?>.gif">
    <table>
        <tr><td><br><b>Сумма на кубиках равна:<?=$summa;?></b></td></tr>
    </table>
    <form method="post"><input type="submit" name="go" value="бросить кости"></form>
    <?php
}
