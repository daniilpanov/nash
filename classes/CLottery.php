
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
        if ($_POST) {

            ?>
            <table>
               <tr>
                   <td>$one</td>
                   <td>$two</td>
                   <td>$three</td>
                   <td>$four</td>
                   <td>$five</td>
                   <td>$six</td>
               </tr>
                <tr>
                    <td>$a</td>
                    <td>$b</td>
                    <td>$c</td>
                    <td>$d</td>
                    <td>$e</td>
                    <td>$f</td>
                </tr>
            </table>
            <?php
        }
    }
}
if ($a==$one && $b==$two && $c==$three && $d==$four && $e==$five && $f==$six){
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
