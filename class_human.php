<?php
class Human 
{ 
	protected $firstName;
	protected $lastName;
	protected $age;
	public static $count_human = 0;

function __construct(string $firstName, string $lastName, int $age)
{
	$this->firstName = $firstName;
	$this->lastName = $lastName;
	$this->age = $age;
  self::$count_human++;

}

 protected function getFiratName()
 {
 	return $this->firstName;
 }

 public function getLastName()
 {
 	return $this->lastName;
 }

 protected function getAge()
 {
 	return $this->age;
 }

	public function viewInfoString()
	{
		$info = $this->firstName . " ". $this->lastName . ", лет: " . $this->age;
		return $info;

	}

}



?>