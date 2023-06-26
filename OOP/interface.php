<?php

interface Shape1{
    public function calculateArea();
}
interface Shape2{
    public function calculatePerimeter();
}

class Circle implements Shape1,Shape2{
    private $radius;
    public function __construct($radius){
        $this->radius=$radius;
    }

    public function calculateArea(){
        return M_PI*pow($this->radius,2);
    }

    public function calculatePerimeter(){
        return 2*M_PI*$this->radius;
    }
}




?>