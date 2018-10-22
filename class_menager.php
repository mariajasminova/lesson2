<?php

 include 'class_employee.php';


 /**
 * 
 */
class Menager 
{
	private $employees = [];

	public function __construct()
		{
			
		}	

	 public function add(Employee $employee) 
	{
		$this->employees[] = $employee;
	
	}
		
	 public function getInfo()
	{
		foreach ($this->employees as $key => $value) {
			echo $key . " " /*.$value. "</br>" */ ; 
	}

}


$employee = new Employee('Igor', 'Svetlov', 19, '30/01/2018', 35000);
$menager = new Menager();
$menager->add($employee);
$menager->getInfo();



?>