<?php

class CVictorina
{
    public $first;
    public $second;
    public $third;
    public $fourth;
    public $fifth;
    public $sixth;
    public $seventh;
    public $eighth;
    public $nineth;
    public $teenth;
    public static $sum;

    public function __construct($data){
        $this->first=$data["one"];
        static :: $sum++;
    }
}