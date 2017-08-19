<?php

class CLottery
{
    public $one;
    public $two;
    public $three;
    public $four;
    public $five;
    public $six;

    public function __construct($data)
    {
        $this->one=$data["numb1"];
        $this->two=$data["numb2"];
        $this->three=$data["numb3"];
        $this->four=$data["numb4"];
        $this->five=$data["numb5"];
        $this->six=$data["numb6"];
    }

    public function checklottery(){
        $a=rand(1,36);
        for($b=rand(1,36);$b==$a;){
            $b=rand(1,36);
        }
        echo "a = ".$a;
        echo "a = ".$b;
    }
}


for($c=rand(1,36);$c==$b || $c==$a;){
    $c=rand(1,36);
}
for($d=rand(1,36);$d==$c || $d==$b || $d==$a;){
    $d=rand(1,36);
}
for($e=rand(1,36);$e==$d || $e==$c || $e==$b || $e==$a;){
    $e=rand(1,36);
}
for($f=rand(1,36);$f==$e || $f==$d || $f==$c || $f==$b || $f==$a;){
    $f=rand(1,36);
}
if ($a==$one1 && $b==$two2 && $c==$three3 && $d==$four4 && $e==$five5 && $f==$six6){
   echo "ВЫ ВЫИГРАЛИ!";
}
else{
    echo "Вы проиграли. Попробуете сыграть ещё?";
    ?>
    <form method="post">
        ведите 6 любых чисел от 1 до 36
        1-е <input type="text"  name="numb1">
        2-е <input type="text"  name="numb2">
        3-е <input type="text"  name="numb3">
        4-е <input type="text"  name="numb4">
        5-е <input type="text"  name="numb5">
        6-е <input type="text"  name="numb6">
        <input type="submit"    value="продолжить">
    </form>
    <?php
}