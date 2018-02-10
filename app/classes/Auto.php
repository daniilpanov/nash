<?php
class Auto
{
    public $year;
    public $model;
    public $color;
    public $speed;
    public static $sum;

    public function __construct($y,$m,$c,$s){
        $this->year = $y;
        $this->model = $m;
        $this->color =$c;
        $this->speed = $s;
        $this->AboutAuto();
        static::$sum++;
}

    public function AboutAuto (){
    echo "Год выпуска модели ".$this->model."-".$this->year.".<br>";
    echo "А цвет этой машины ".$this->color.".<br>";
    echo "Эта машина может разогнаться до скорости ".$this->speed."!<br>";
    }
}

class Truck extends Auto
{
    public $cargo;
    public static $sum;

    public function __construct($y,$m,$c,$s,$cg){
        parent::__construct($y,$m,$c,$s);
        $this->cargo = $cg;
        $this->AboutTruck();
    }
    public function AboutTruck(){
        echo "Этот грузовик способен перевозить до ".$this->cargo." тн. груза .<br>";
    }
}

class Bus extends Auto
{
    public $seats;
    public static $sum;

    public function __construct($y,$m,$c,$s,$st){
        parent::__construct($y,$m,$c,$s);
        $this->seats = $st;
        $this->AboutBus();
    }
    public function AboutBus(){
        echo "Этот автобус способен перевозить до ".$this->seats." человек.<br>";
    }
}