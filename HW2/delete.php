<?php 
if (!empty($_POST['delete']))
{
	require ("add.php");
	$student_id = isset($_POST['student_id']) ? $_POST['student_id'] : '';
	deleteStudent($student_id);
}

header("Location:list.php");
?>