<?php
function __autoload($classes){
    require_once ("classes/".$classes.".php");
}

// создаем обьекты
$daniil_house = new House();
$ivan_house = new House();
$lyubomyr_house = new Block();
$lyubomyr_house->buildHouse("Любомира","тёмная","монолита",4,"фиолетовый",20);

$daniil_house->buildHouse("Даниила","синяя","кирпича",2,"красный");
$ivan_house->buildHouse("Ивана","оранжевая","бетона",2,"зелёный");


$daniil_house->aboutHouse();
$ivan_house->aboutHouse();

echo "Количество построенных домов: ".House::$col;
echo "<br>";
echo "Количество построенных многоэтажных домов: ".Block::$col;
