<?php

class Student extends Human
{
	private $form_educ;
	private $course;
	private $rating;

	public function __construct($firstName, $lastName, $age, $course, $form_educ)
	{
		parent::__construct($firstName, $lastName, $age);
		$this->course = $course;
		$this->form_educ = $form_educ;
	}

	public function getInfo()
	{
		$info = parent::getInfo();
		$info .= ' '."{$this->course}".' '."{$this->form_educ}";
		return $info;
	}
}


$stud = new Student('Igor', 'Svetlov', 19, 3, 'och');

echo $stud->getInfo();
echo "</br>";

?>