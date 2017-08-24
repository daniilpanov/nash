
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
        echo "<table><tr>";

        echo "<td>".$this->one=$data["numb1"]."</td>";
        echo "<td>".$this->two=$data["numb2"]."</td>";
        echo "<td>".$this->three=$data["numb3"]."</td>";
        echo "<td>".$this->four=$data["numb4"]."</td>";
        echo "<td>".$this->five=$data["numb5"]."</td>";
        echo "<td>".$this->six=$data["numb6"]."</td>";
        echo "</tr></table>";
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

        if ($a==$this->one && $b==$this->two && $c==$this->three && $d==$this->four && $e==$this->five && $f==$this->six){
            echo "ВЫ ВЫИГРАЛИ!";
        }
        if ($_POST) {

            ?>
            <table>
                <tr>
                    <td><?=$a?></td>
                    <td><?=$b?></td>
                    <td><?=$c?></td>
                    <td><?=$d?></td>
                    <td><?=$e?></td>
                    <td><?=$f?></td>
                </tr>
            </table>
            <?php
        }
    }
}