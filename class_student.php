<?php
//include 'class_human.php';

class Student extends Human
{
	private $form_educ;
	private $course;
	private $rating = [];
	public static $count_student = 0;

	function __construct(string $firstName, string $lastName, int $age, int $course, string $form_educ, array $rating)
	{
		parent::__construct($firstName, $lastName, $age);
		$this->course = $course;
		$this->form_educ = $form_educ;
		$this->rating += $rating;
		self::$count_student++;
	}

		private function getRating()
	{
		$viewrating = ", rating: ";

		foreach ($this->rating as $value) {
			$viewrating .= $value. " ";
		}
		return $viewrating;
	}

	public function viewInfoString()
	{
		$info = parent::viewInfoString();
		$info .= ', курс: '."$this->course".', форма обучения: '."$this->form_educ";
		//return
		 echo $info ." " . $this->getRating();

	}

	
	
}

$rating = [3, 4, 5];

$student = new Student('Игорь', 'Светлов', 19, 3, 'очная', $rating);

$student->viewInfoString();

echo "</br>";

$human = new Human("Игорь", "Светлов", 19);
print $human->viewInfoString();

echo "</br>";
echo "количество экземпляров класса \"Human\": " . Human::$count_human;
echo "</br>";
echo "количество экземпляров класса \"Student\": " . $student::$count_student;
echo "</br>";

?>