<?php
class Human 
{ 
	protected $firstName;
	protected $lastName;
	protected $age;

public function setFullName($firstName, $lastName, $age)
{
	$this->firstName = $firstName;
	$this->lastName = $lastName;
	$this->age = $age;

}

public function getFullName()
{
	return $this->firstName . ' ' . $this->lastName . ' ' . $this->age;

}

}
?>