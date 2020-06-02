<?php 
require 'add_process.php';
$students = getAllStudents();
$id = $_GET['id'];
foreach ($students as $value) {
	if ($id == $value['student_id']) {
		echo "<br>Mã sinh viên: ".$value['student_id'];
		echo "<br>Họ tên: ".$value['student_name'];
		echo "<br>Email: ".$value['student_email'];
		echo "<br>Giới tính: ".$value['student_gender'];
		echo "<br>Địa chỉ: ".$value['student_address'];
	}
}
?>