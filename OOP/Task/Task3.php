<?php

interface Movable{
    public function move();
}


class Vehicle{
    private $brand;

    public function __construct($brand){
        $this->brand=$brand;
    }

    public function startEngine(){
        echo "Started".$this->brand;
    }

    public function getBrand(){
        return $this->brand;
    }
}

class Car extends Vehicle implements Movable{
    public function __construct($brand){
        parent::__construct($brand);
    }

    public function move(){
        echo $this->getBrand()." is Moving........";
    }
}


$audi = new Car("Audi");
$audi->move();

?>