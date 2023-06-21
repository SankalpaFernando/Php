<?php
// Task 1 and Task 2 v\
class Account{
    
    private $customer;
    private $accountNo;
    private $balance;
    private static $annaulIntrestRate=5.8;

    function __construct($customer,$accountNo,$balance){
        $this->customer = $customer;
        $this->accountNo = $accountNo;
        $this->setInitialBalance($balance);
    }

    function setInitialBalance($balance){
        $this->balance = $balance;
    }

    function deposit($amount){
        $this->balance += $amount;
    }

    function withdrawal($amount){
        if($this->balance >= $amount){
            $this->balance -= $amount;
        }
        else{
            echo "Insufficient Balance";
        }
    }
    function calculateMonthlyIntrest(){
        $this->balance+=($this->balance*self::$annaulIntrestRate)/12;
    }
    static function modifyInterestRate(){
        self::$annaulIntrestRate = 6.8;
    }
    function getBalance(){
        return $this->balance;
    }
    function getAccountNo(){
        return $this->accountNo;
    }
    function getCustomer(){
        return $this->customer;
    }
    function setBalance($balance){
        $this->balance = $balance;
    }
    function setAccountNo($accountNo){
        $this->accountNo = $accountNo;
    }
    function setCustomer($customer){
        $this->customer = $customer;
    }
    static function getAnnualInterestRate(){
        return self::$annaulIntrestRate;
    }

}


$boc = new Account("Sankalpa Fernando","8898552258",40000);
$hnb = new Account("Kavindu Sankalpa","678522552",30000);

echo "<table>";
echo "<tr><th>Account No</th><th>Customer</th><th>Balance</th></tr>";
echo "<tr><td>".$boc->getAccountNo()."</td><td>".$boc->getCustomer()."</td><td>".$boc->getBalance()."</td></tr>";
echo "<tr><td>".$hnb->getAccountNo()."</td><td>".$hnb->getCustomer()."</td><td>".$hnb->getBalance()."</td></tr>";
echo "</table>";

echo "BOC Balance: ".$boc->getBalance()."<br>";
echo "HNB Balance: ".$hnb->getBalance()."<br>";

$boc->deposit(5000);
$hnb->deposit(1000);

echo "After Depositing<br>";

echo "BOC Balance: ".$boc->getBalance()."<br>";
echo "HNB Balance: ".$hnb->getBalance()."<br>";

$boc->calculateMonthlyIntrest();
$hnb->calculateMonthlyIntrest();

echo "After Calculating Monthly Intrest<br>";

echo "BOC Balance: ".$boc->getBalance()."<br>";
echo "HNB Balance: ".$hnb->getBalance()."<br>";

Account::modifyInterestRate();

echo "Interest Rate :".Account::getAnnualInterestRate();




echo "<br><br> <hr/> <br><br>";


$saver1 = new Account("Saver One","785555220", 2000.00);
$saver2 = new Account("Saver Two","785555240", 3000.00);

Account::modifyInterestRate(4);

$saver1->calculateMonthlyIntrest();
$saver2->calculateMonthlyIntrest();

echo "Saver One Balance: ".$saver1->getBalance()."<br>";
echo "Saver Two Balance: ".$saver2->getBalance()."<br>";

Account::modifyInterestRate(5);

$saver1->calculateMonthlyIntrest() ."<br>";
$saver2->calculateMonthlyIntrest()."<br>";

echo "Saver One Balance: ".$saver1->getBalance()."<br>";
echo "Saver Two Balance: ".$saver2->getBalance()."<br>";

?>