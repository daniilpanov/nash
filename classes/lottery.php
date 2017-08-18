<h1>ЛОТТЕРЕЯ!</h1>
<h3>6 из 36</h3>
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
$one1=$_POST["numb1"];
$two2=$_POST["numb2"];
$three3=$_POST["numb3"];
$four4=$_POST["numb4"];
$five5=$_POST["numb5"];
$six6=$_POST["numb6"];

class lottery
{
    public $one;
    public $two;
    public $three;
    public $four;
    public $five;
    public $six;
    public function __construct($o,$t,$th,$f,$fi,$s)
    {
        $this->one=$o;
        $this->two=$t;
        $this->three=$th;
        $this->four=$f;
        $this->five=$fi;
        $this->six=$s;
    }
}
$numb1= new lottery($a,$b,$c,$d,$e,$f);
$a=rand(1,36);
for($b=rand(1,36);$b==$a;){
    $b=rand(1,36);
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