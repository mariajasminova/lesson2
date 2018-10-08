<?php

 include 'class_human.php';

/**
* 
*/
class Employee extends Human
{
	private $date;
	private $salary;
	const FIX_PRICE = 35000;
		
	public function __construct($firstName, $lastName, $age)
	{
		parent::__construct($firstName, $lastName, $age);
	}

	public function setPaymentDate($a, $b)
	{
		$this->date[]= $a;
		$this->salary[] = $b;
	}

	public function addPaymentDate($a, $b)
	{
		array_push($this->date, $a);
		if (is_int($b)){
			array_push($this->salary, $b);
		}else{
			array_push($this->salary, self::FIX_PRICE);
		}
		

	}

	public function getInfo()
	{
		$info = parent::getInfo();
		echo "</br>";
		$count = count($this->date);
		for ($i=0; $i < $count; $i++) { 
			echo $this->date[$i] . ' :  ' . $this->salary[$i] .'; ' ;
		}
	}

}

$employee = new Employee('Igor', 'Svetlov', 19, '30/01/2018', 35000);
$employee->setPaymentDate('30/01/2018', 35000);
$employee->addPaymentDate('28/02/2018', NULL);
$employee->getInfo();


?>