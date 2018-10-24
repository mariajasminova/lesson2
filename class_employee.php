<?php

 //include 'class_human.php';

/**
* 
*/
class Employee extends Human
{
	protected $paymentdate = [];
	const FIX_PRICE = 35000;
	public static $count_emploee = 0;
	//private $fullinfo;
		
	function __construct(string $firstName, string $lastName, int $age, string $date, int $salary)
	{
		parent::__construct($firstName, $lastName, $age);
		$this->paymentdate += [$date => $salary];
		self::$count_emploee++;
		//$this->fullinfo = '!!!!!!!!'.$this->getFiratName() . ' ' . $this->getLastName() . ' ' . $this->getAge() . ' ' . $this->getPaymentDate();
	}

	public function addPaymentDate(string $date, int $salary = 35000)
	{
		$this->paymentdate += [$date => $salary];
	}

	protected function getPaymentDate()
	{
		$viewpaymentdate ='Дата - Зарплата: ';
		foreach ($this->paymentdate as $key => $value) {
			$viewpaymentdate .=  $key . " - " .$value . ', ';
		}
		return $viewpaymentdate;
	}

	public function viewInfoString()
	{
		$info = parent::viewInfoString() .', '. $this->getPaymentDate();
		echo $info;
		
	}


}

$employee = new Employee('Игорь', 'Светлов', 19, '30/01/2018', 35000);
$employee->addPaymentDate('28/02/2018');
$employee->viewInfoString();
$h = new Human('Игорь', 'Светлов', 19);

echo "</br>";
echo "количество экземпляров класса \"Human\": " . Human::$count_human;
echo "</br>";
echo "количество экземпляров класса \"Employee\": " . Employee::$count_emploee;
echo "</br>";



//echo Employee::$fullinfo;

?>