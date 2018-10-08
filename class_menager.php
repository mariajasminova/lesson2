<?php

 include 'class_employee.php';


 /**
 * 
 */
class Menager extends Employee
{
	private $employees = [];

	public function __construct()
		{
			
		}	

	 public function setEmployee($firstName, $lastName, $age) //, $date, $salary
	{
		$this->employees[] = new Employee($firstName, $lastName, $age);
	
	}
		
	 public function getInfo()
	{
			var_dump($this->employees);
	}

}


$menager = new Menager();
$menager->setEmployee('Igor', 'Svetlov', 19);
$menager->getInfo();



?>