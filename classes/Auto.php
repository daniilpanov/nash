<?php
class Auto
{
    public $a;
    public $m;
    public $c;
    public $s;
    public static $sum;
    public function__construct($ag,$M,$co,$sp){
        $this->a = $ag;
        $this->m = $M;
        $this->c =$co;
        $this->s = $sp;
        $this->AboutAuto();
        self::$sum++;
}

public function AboutAuto (){
    echo "Год выпуска модели".$this->m."-".$this->a.".<br>";
    echo "А цвет этой машины".$this->c.".<br>";
    echo "Эта машина может разогнаться до скорости".$this->s."!<br><br>";
    }
}

class Truck extends Auto
{
    public $g;
    public function__construct($ag,$M,$co,$sp,$gr){
        parent::__construct($ag,$M,$co,$sp);
        $this->g = $gr;
        $this->AboutTruck();
    }
    public function AboutTruck(){
        echo "Этот грузовик способен перевозить до".$this->g = gr.".<br>";
    }
}

class Bus extends Auto
{
    public $hm;
    public function__construct($ag,$M,$co,$sp,$h){
        parent::__construct($ag,$M,$co,$sp);
        $this->hm = $h;
        $this->AboutBus();
    }
    public function AboutBus(){
        echo "Этот автобус способен перевозить до".$this->h = hm.".<br>";
    }
}
$mother_car = car Auto(2015,"OPEL","тёмно-синий","199км/ч");
$aunt_car = car Bus(2001,"VOLVO","оранжевый","150км/ч","50 чел");
$mother_friend_car Truck(2010,"MEN","коричневый","150км/ч","5т");
