<?php

abstract class Employee{
    private $firstName;
    private $lastName;
    private $salary;

    public function __construct($firstName,$lastName,$salary){
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->salary = $salary;
    }

    public function getFullName(){
        return $this->firstName." ".$this->lastName;
    }

    public function getSalary(){
        return $this->salary;
    }

    abstract public function calculateEarnings();
}

class HourlyEmployee extends Employee{
    private $hoursWorked;
    private $hourlyRate;

    public function __construct($firstName,$lastName,$salary,$hoursWorked,$hourlyRate){
        parent::__construct($firstName,$lastName,$salary);
        $this->hoursWorked = $hoursWorked;
        $this->hourlyRate = $hourlyRate;
    }

    public function calculateEarnings(){
        return $this->hourlyRate*$this->hoursWorked;
    }

}

class SalariedEmployee extends Employee{
    public function calculateEarnings(){
        return parent::getSalary();
    }
}

class CommissionEmployee extends Employee{
    private $sales;
    private $commissionRate;

    public function __construct($firstName,$lastName,$salary,$sales,$commissionRate){
        parent::__construct($firstName,$lastName,$salary);
        $this->sales=$sales;
        $this->commissionRate=$commissionRate;
    }

    public function calculateEarnings(){
        return $this->sales*$this->commissionRate;
    }
}


$empH = new HourlyEmployee("John","Doe",0,80,25);
$empS = new SalariedEmployee("Mary","Andrews",10000);
$empC = new CommissionEmployee("Andrea","Fernando",0,800,0.25);


echo "Hourly Employee John's salary : $".$empH->calculateEarnings()."<br>";
echo "Salaried Employee Mary's salary : $".$empS->calculateEarnings()."<br>";
echo "Commission Employee Andrea's salary : $".$empC->calculateEarnings()."<br>";


?>