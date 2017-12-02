
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

        $this->one = $data["numb1"];
        $this->two = $data["numb2"];
        $this->three = $data["numb3"];
        $this->four = $data["numb4"];
        $this->five = $data["numb5"];
        $this->six = $data["numb6"];
    }

    public function checklottery(){
        // Проверка чисел rand
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
            ?>
            <center>
                <table>
                    <tr>
                        <td><h1>Вот ваши результаты:</h1></td>
                    </tr>
                </table>
                <table>
                    <h1>
                        <tr>
                            <td><?=$this->one?></td>
                            <td><?=$this->two?></td>
                            <td><?=$this->three?></td>
                            <td><?=$this->four?></td>
                            <td><?=$this->five?></td>
                            <td><?=$this->six?></td>
                        </tr>
                        <tr>
                            <td><?=$a?></td>
                            <td><?=$b?></td>
                            <td><?=$c?></td>
                            <td><?=$d?></td>
                            <td><?=$e?></td>
                            <td><?=$f?></td>
                        </tr>
                    </h1>
                </table>
            </center>
        <?php
    }
}