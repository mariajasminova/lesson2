<?php
class Human 
{ 
	protected $firstName;
	protected $lastName;
	protected $age;

public function __construct(string $firstName, string $lastName, int $age)
{
	$this->firstName = $firstName;
	$this->lastName = $lastName;
	$this->age = $age;

}

	public function getInfo()
	{
		$info = "{$this->firstName}".' '."{$this->lastName}".' '."{$this->age}";
		return $info;

	}

}
?>