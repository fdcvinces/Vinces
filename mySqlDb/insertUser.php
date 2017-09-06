<?php
session_start();
include '../mySqlDb/dbconnect.php';

$first_name = $_POST['first_name'];
$middle_name = $_POST['middle_name'];
$last_name = $_POST['last_name'];
$gender = $_POST['gender'];
$birthday = $_POST['birthday'];
$created_date = date('Y-m-d H:i:s');
$modified_date = date('Y-m-d H:i:s');
$created_ip = $_POST['created_ip'];
$modified_ip = $_POST['modified_ip'];




if(empty($first_name)){
	header("Location: ../mySqlDb/insertUser.php?emptyfields");
	//alert("Please Fill all Fields");
}
elseif(empty($middle_name)){
	header("Location: ../mySqlDb/insertUser.php?emptyfields");
}
elseif(empty($last_name)){
	header("Location: ../mySqlDb/insertUser.php?emptyfields");
}	
elseif(empty($gender)){
	header("Location: ../mySqlDb/insertUser.php?emptyfields");
}
elseif(empty($birthday)){
	header("Location: ../mySqlDb/insertUser.php?emptyfields");
}
//elseif(empty($created_date)){
//	header("Location: ../mySqlDb/insertUser.php?emptyfields");
//}
//elseif(empty($modified_date)){
//	header("Location: ../mySqlDb/insertUser.php?emptyfields");
//}
elseif(empty($created_ip)){
	header("Location: ../mySqlDb/insertUser.php?emptyfields");
}
elseif(empty($modified_ip)){
	header("Location: ../mySqlDb/insertUser.php?emptyfields");
}
else{
	$sql = "INSERT INTO users(first_name, middle_name, last_name, gender, birthday, created_date, modified_date, created_ip, modified_ip) VALUES('$first_name','$middle_name','$last_name','$gender', '$birthday', '$created_date', '$modified_date', '$created_ip', '$modified_ip')";
		$result = $conn->query($sql);
		
		/*
   		echo '<script>';
		echo 'alert("Inserted Successfully")';
		echo '</script>';
		*/

		header("Location: ../mySqlDb/home.php");
}
