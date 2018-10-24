<?php

 //include 'class_employee.php';


 /**
 * 
 */
class Menager extends Employee
{
	private $employees = [];
	public static $count_menager = 0;

	function __construct(string $firstName, string $lastName, int $age, string $date, int $salary)
		{
			parent::__construct($firstName, $lastName, $age, $date, $salary);
			$this->paymentdate += [$date => $salary];
			self::$count_menager++;
			self::$count_emploee++;
		}	

	 public function addEmployee(Employee $employee ) 
	{
		$this->employees[] = $employee;
	}
		
	 public function deleteEmployee(string $lastNameEmployeeDelete)
	{
		$flag = FALSE;
		$lastNameEmployee;
		foreach ($this->employees as $key => $value) {
		 	$lastNameEmployee = $value->getLastName(); 
		 	if (strcmp($lastNameEmployee, $lastNameEmployeeDelete)) { //если yt совпадают, то вернет 1
		  }else{
			 	$flag = TRUE;
		 		unset($this->employees[$key]);
		 		sort($this->employees);
		 		echo "нашел и удалил ";
		 		break;
				}
		}
		if ($flag == FALSE) {
			echo "не нашел";
		}
	}

	

	 public function getFullInfoEmployee()
	{
		$fullinfoemployee;
		 foreach ($this->employees as $key => $value) {
		 $fullinfoemployee = $value->viewInfoString(); 
		 echo $fullinfoemployee . "</br>";
		
		}
		
	}




}



echo "Менеджер: ";
$menager = new Menager('Анатолий', 'Зайцев', 28, '30/01/2018', 55000);
$employee1 = new Employee('Игорь', 'Светлов', 19, '30/01/2018', 35000);  
$employee2 = new Employee('Василий', 'Редкий', 20, '30/01/2018', 35000);
$menager->addEmployee($employee1); 
$menager->addEmployee($employee2);
$menager->viewInfoString(); 
echo "</br>";
echo "</br>";
echo "Список сотруников в подчинении: </br>";
$menager->getFullInfoEmployee();


echo "</br>Удаление сотрудника из списпка: </br>";

$menager->deleteEmployee('Светлов');
echo "</br>";
echo "</br>Список сотруников в подчинении: </br>";
$menager->getFullInfoEmployee();

echo "</br></br>";
echo "количество экземпляров класса \"Employee\": " . Employee::$count_emploee;
echo "</br>";
echo "количество экземпляров класса \"Menager\": " . Menager::$count_menager;
?>