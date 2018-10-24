<?php

echo "-----------------------------</br>";
echo "Класс \"Human\"</br>";
include 'class_human.php';
echo "</br></br>";
echo "-----------------------------</br>";
echo "Класс \"Student\"</br>";
include 'class_student.php';
echo "</br></br>";
echo "-----------------------------</br>";
echo "Класс \"Employee\"</br>";
echo "</br>";
 include 'class_employee.php';
echo "</br></br>";
 echo "-----------------------------</br>";
 echo "Класс \"Menager\"</br>";
 include 'class_menager.php';


// class Menager extends Employee
// {
// 	private $employees = [];
// 	public static $count_menager = 0;

// 	function __construct(string $firstName, string $lastName, int $age, string $date, int $salary)
// 		{
// 			parent::__construct($firstName, $lastName, $age, $date, $salary);
// 			$this->paymentdate += [$date => $salary];
// 			self::$count_menager++;
// 			self::$count_emploee++;
// 		}	

// 	 public function addEmployee(Employee $employee ) 
// 	{
// 		$this->employees[] = $employee;
// 	}
		
// 	 public function getInfo(string $lastNameEmployeeDelete)
// 	{
// 		$flag = FALSE;
// 		$lastNameEmployee;
// 		foreach ($this->employees as $key => $value) {
// 		 	$lastNameEmployee = $value->getLastName(); 
// 		 	if (strcmp($lastNameEmployee, $lastNameEmployeeDelete)) { //если yt совпадают, то вернет 1
// 		  }else{
// 			 	$flag = TRUE;
// 		 		unset($value);
// 		 		sort($this->employees);
// 		 		echo "нашел и удалил";
// 		 		break;
// 				}
// 		}
// 		if ($flag == FALSE) {
// 			echo "не нашел";
// 		}
// 	}

	

// 	 public function getFullInfoEmployee()
// 	{
// 		$fullinfoemployee;
// 		 foreach ($this->employees as $key => $value) {
// 		 $fullinfoemployee = $value->viewInfoString(); 
// 		 echo $fullinfoemployee . "</br>";
		
// 		}
		
// 	}




// }


// $e = new Employee('Игорь', 'Светлов', 19, '30/01/2018', 35000);
// $e1 = new Employee('Василий', 'Редкий', 20, '30/01/2018', 35000);

// $menager = new Menager('Анатолий', 'Зайцев', 28, '30/01/2018', 55000);
// $menager->addEmployee($e);
// $menager->addEmployee($e1);
// $menager->viewInfoString();

// echo "</br>";
// echo "</br>";
// $menager->getInfo('Редкий');
// echo "</br>";
// $menager->viewInfoString();
// //var_dump($menager);
// echo "</br>";
// echo "</br>";
// $menager->getFullInfoEmployee();


// echo "</br>";
// echo "количество экземпляров класса \"Employee\": " . Employee::$count_emploee;
// echo "</br>";
// echo "количество экземпляров класса \"Menager\": " . Menager::$count_menager;







?>