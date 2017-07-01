<?php

//создаем новый класс
class House
{
    public $owner; //свойство
    public $roof;
    public $walls;
    public $windows;
    public $fasad;

    public static $sum =0;

    public function __construct($o,$r,$w,$wnd,$f)
    {
        $this->owner = $o;
        $this->roof = $r;
        $this->walls =$w;
        $this->windows = $wnd;
        $this->fasad = $f;

        $this->aboutHouse();

        self::$sum++;


    }

    public function aboutHouse(){
        echo "Дом ".$this->owner."<br>";
        echo "Цвет крыши ".$this->roof."<br>";
        echo "Дом построен с ".$this->walls."<br>";
        echo "Окон ".$this->windows."<br>";
        echo "Цвет дома ".$this->fasad."<br><br>";
    }

}

class BlockHouse extends House {
    public $podjezd;
    public $apartment;

    public function __construct($o, $r, $w, $wnd, $f, $p, $a)
    {
        parent::__construct($o, $r, $w, $wnd, $f);
        $this->podjezd = $p;
        $this->apartment =$a;

        $this->aboutBlockHouse();
    }

    public function aboutBlockHouse()
    {
        echo "Подъездов ".$this->podjezd."<br>";
        echo "Квартир ".$this->apartment."<br>";
    }
}
# создаем обьекты

$daniil_house = new House("Даниила","синяя","кирпича",2,"красный");
$ivan_house = new House("Ивана","оранжевая","бетона",3,"зелёный");
$denis_dom = new BlockHouse("Дениса","желтая","пенопласта",4,"разноцветный",2,50);

echo "Количество домов на нашей улице: ".House::$sum;


