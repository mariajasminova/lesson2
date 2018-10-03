<?php
include 'class_human.php';
include 'class_student.php';


$stud = new Student('Igor', 'Svetlov', 19, 4, 'och');
echo $stud->getInfo();
?>