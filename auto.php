<?php
$auto["bmw"] = array("color"=>"красный","year"=> 1990,"speed"=>210);
$auto["audi"] = array("color"=>"черный","year"=>2001,"speed"=>230);
$auto{"Volvo"} = array("color"=>"черный","year"=>2002,"speed"=>300);
foreach ($auto as $key=>$znach )
{
    echo $key."<br>";
    foreach ($znach as $znach2){
        echo  $znach2."<br>";
    }
    echo "<br>";
}