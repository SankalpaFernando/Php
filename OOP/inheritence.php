<?php

class Vehicle {

    protected $color;
    private $speed;
    
    public function __construct($color,$speed){
        $this->color = $color;
        $this->speed = $speed;
    }

    public function getColor(){
        return $this->color;
    }

    public function getSpeed(){
        return $this->speed;
    }

    public function accelerate($amount){
        $this->speed += $amount;
        echo "The vehicle accelerates to {$this->speed} km/h. </br>";
    }

    public function displayInfo(){
        echo "Color: {$this->color} <br>";
        echo "Speed: {$this->speed} km/h <br>";
    }

}

class Car extends Vehicle{
    private $brand;
    
    public function __construct($color,$speed,$brand){
        parent::__construct($color,$speed);
        $this->brand=$brand;
    }

    public function getBrand(){
        return $this->brand;
    }

    public function displayInfo(){
        parent::displayInfo();
        echo "Brand: {$this->brand} <br>";
    }

}

// Parent Class

$vehicle = new Vehicle("red",60);
echo $vehicle->getColor()."<br>";
$vehicle->displayInfo();

// Child class

$car = new Car("blue",100,"BMW");
echo $car->getColor()."<br>";


?>