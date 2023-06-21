
<?php 

class Person{
    public $name;
    public $age;

    function __construct($name="",$age=0){
        $this->name=$name;
        $this->age=$age;
    }

    function getName(){ return $this->name;}
    function getAge(){ return $this->age;}

    function setName($name){ $this->name = $name;}
    function setAge($age){ $this->age = $age;}

    function __destruct(){
        echo "End of the class";
    }
}

$john = new Person("John Doe",25);
echo "Name: ".$john->getName()."<br>";
echo "Age: ".$john->getAge()."<br>";

$john->name = "John";
$john->age = 24;

echo "Name: ".$john->getName()."<br>";
echo "Age: ".$john->getAge()."<br>";

$john->setName("John Doe");
$john->setAge(25);

echo "Name: ".$john->getName()."<br>";
echo "Age: ".$john->getAge()."<br>";

class MyClass{
    public $var = 10;
    public static $stvar = 20;

    function printval(){
        echo $this->var;
    }

    static function printstval(){
        echo self::$stvar;
    }
}

$m1 = new MyClass();
echo "Name: ".$m1->var."<br>";
echo "Age: ".MyClass::$stvar."<br>";

echo $m1->printval()."<br>";
echo MyClass::printstval()."<br>";

?>