<h6> логин</h6>
<a href="kostu/">игра в кости...</a>
<a href="views/VLottery.php">Лотерея</a>
<a href="views/VVictorina.php">Викторина</a>

<form method="post">
Как вас зовут?
<input type="text" name="imja"><br>
Сколько вам лет?
<input type="text" name="vozr"><br>
<input type="submit" value="ok">
</form>

<?php

function __autoload($class_name)
{
    require_once("classes/".$class_name . ".php");
}


$name1 = $_POST['imja'];
$vozr1 = $_POST['vozr'];


echo "Меня зовут ".$name1." и мне ".$vozr1." лет.<br>";

function br(){
    echo "<br>";
}

function build($obj){
    if($obj instanceof Auto){
        echo "Автомобиль<br>";
        br();
    }

    if($obj instanceof Bus){
        echo "Автобус<br>";
        br();
    }

    if($obj instanceof Truck){
        echo "Грузовик<br>";
        br();
    }
}

$daniil_house = new House();
$ivan_house = new House();

$daniil_house->buildHouse("Даниила","синяя","кирпича",2,"красный");
$ivan_house->buildHouse("Ивана","оранжевая","бетона",2,"зелёный");


$daniil_house->aboutHouse();
$ivan_house->aboutHouse();

$mother_car = new Auto(2015,"OPEL","тёмно-синий","199км/ч");
br();
$father_car = new Auto(2017,"OPEL","синий","200км/ч");
br();
$aunt_car = new Bus(2001,"VOLVO","оранжевый","150км/ч",50);
br();
$mother_friend_car = new Truck(2010,"MAN","коричневый","150км/ч",5);
br();

build($aunt_car);

echo "Количество автомобилей: ".Auto::$sum."<br>";
echo "Количество автобусов: ".Bus::$sum."<br>";
echo "Количество грузовиков: ".Truck::$sum."<br>";

$a = new A();
$b = new B();


?>