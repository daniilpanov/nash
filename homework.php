<?php
//создаем новый класс
class House
 {
        public $owner; //свойство
     public $roof;
     public $walls;
     public $windows;
     public $fasad;

     public function aboutHouse(){
                echo "Дом ".$this->owner."<br>";
         echo "Цвет крыши ".$this->roof."<br>";
         echo "Дом построен с ".$this->walls."<br>";
         echo "Окон ".$this->windows."<br>";
         echo "Цвет дома ".$this->fasad."<br><br>";
     }

     public function buildHouse($o,$r,$w,$wnd,$f){
                $this->owner = $o;
                $this->roof = $r;
                $this->walls =$w;
                $this->windows = $wnd;
                $this->fasad = $f;
            }


 // создаем обьекты

 $daniil_house = new House();
 $ivan_house = new House();

 $daniil_house->buildHouse("Даниила","синяя","кирпича",2,"красный");


 $ivan_house->buildHouse("Ивана","оранжевая","бетона",1,"зелёный");


$daniil_house->aboutHouse();
$ivan_house->aboutHouse();