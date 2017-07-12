<?php
class Auto
{
    public $a;
    public $m;
    public $c;
    public $s;

    public function AboutAuto (){
        echo "Год выпуска модели".$this->a."-".$this->m.".";
        echo "А цвет этого автомобиля".$this->c.".";
        echo "Этот автомобиль может разогнаться до скорости".$this->s;
    }
    public function bAuto ($ag,$M,$co,$sp){
        $this->a = $ag;
        $this->m = $M;
        $this->c =$co;
        $this->s = $sp;
    }
}

class Truck
{

}