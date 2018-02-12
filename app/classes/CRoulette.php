<?php
namespace app\classes;
class CRoulette
{
    public $one;
    public $two;
    public $three;
    public $four;
    public $five;
    public $six;
    public function __construct($data)
    {
        $this->one = $data["numb1"];
        $this->two = $data["numb2"];
        $this->three = $data["numb3"];
        $this->four = $data["numb4"];
        $this->five = $data["numb5"];
        $this->six = $data["numb6"];
    }

    public function checkroulette(){
        // Проверка на совпадение чисел
        $a=rand(1,36);
        $b=rand(1,36);
        $c=rand(1,36);
        $d=rand(1,36);
        $e=rand(1,36);
        $f=rand(1,36);

        if ($this->one+$this->two+$this->three+$this->four+$this->five+$this->six == $a+$b+$c+$d+$e+$f){
            $rezult = "ВЫ ВЫИГРАЛИ!!!";
        }
        else{
            $rezult = "Вы проиграли";
        }
        ?>
        <center>
            <table id='2'>
                <tr>
                    <td><h1><?=$rezult?></h1></td>
                </tr>
            </table id='2'>
            <table>
                <tr>
                    <td class="h" width="50px" height="25px"><?=$this->one?></td>
                    <td class="h" width="50px" height="25px"><?=$this->two?></td>
                    <td class="h" width="50px" height="25px"><?=$this->three?></td>
                    <td class="h" width="50px" height="25px"><?=$this->four?></td>
                    <td class="h" width="50px" height="25px"><?=$this->five?></td>
                    <td class="h" width="50px" height="25px"><?=$this->six?></td>
                </tr>
                <tr>
                    <td class="f" width="50px" height="25px"><?=$a?></td>
                    <td class="f" width="50px" height="25px"><?=$b?></td>
                    <td class="f" width="50px" height="25px"><?=$c?></td>
                    <td class="f" width="50px" height="25px"><?=$d?></td>
                    <td class="f" width="50px" height="25px"><?=$e?></td>
                    <td class="f" width="50px" height="25px"><?=$f?></td>
                </tr>
            </table>
        </center>
        <?php
    }
}