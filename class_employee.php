<?php

 include 'class_human.php';

/**
* 
*/
class Employee extends Human
{
	private $paymentdate = [];
	const FIX_PRICE = 35000;
		
	public function __construct(string $firstName, string $lastName, int $age, string $date, int $salary)
	{
		parent::__construct(string $firstName, string $lastName, int $age);
		$this->paymentdate += [$date => $salary];
	}

/*	public function setPaymentDate(string $date, int $salary)
	{
		$this->paymentdate += [$date => $salary];
	}
*/

	public function addPaymentDate(string $date, $salary = self::FIX_PRICE)
	{
		$this->paymentdate += [$date => $salary];
	}

	public function getInfo()
	{
		$info = parent::getInfo();
		echo "</br>";
		foreach ($this->paymentdate as $key => $value) {
			echo $key . " " .$value. "</br>";
		}
	}

}

$employee = new Employee('Igor', 'Svetlov', 19, '30/01/2018', 35000);
//$employee->setPaymentDate('30/01/2018', 35000);
$employee->addPaymentDate('28/02/2018', NULL);
$employee->getInfo();


?>