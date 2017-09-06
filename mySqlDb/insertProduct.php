<?php
session_start();
include '../mySqlDb/dbconnect.php';

$product_id = $_POST['product_id'];
$name = $_POST['name'];
$description = $_POST['description'];
$type = $_POST['type'];
$created_date = date('Y-m-d H:i:s');
$modified_date = date('Y-m-d H:i:s');
$created_ip = $_POST['created_ip'];
$modified_ip = $_POST['modified_ip'];




if(empty($product_id)){
	header("Location: ../mySqlDb/insertProduct.php?emptyfields");
}
elseif(empty($name)){
	header("Location: ../mySqlDb/insertProduct.php?emptyfields");
}
elseif(empty($description)){
	header("Location: ../mySqlDb/insertProduct.php?emptyfields");
}	
elseif(empty($type)){
	header("Location: ../mySqlDb/insertProduct.php?emptyfields");
}
elseif(empty($created_date)){
	header("Location: ../mySqlDb/insertProduct.php?emptyfields");
}
elseif(empty($modified_date)){
	header("Location: ../mySqlDb/insertProduct.php?emptyfields");
}
elseif(empty($created_ip)){
	header("Location: ../mySqlDb/insertProduct.php?emptyfields");
}
elseif(empty($modified_ip)){
	header("Location: ../mySqlDb/insertProduct.php?emptyfields");
}
else{
	$sql = "INSERT INTO products(product_id, name, description, type, created_date, modified_date, created_ip, modified_ip) VALUES('$product_id','$name','$description','$type', '$created_date', '$modified_date', '$created_ip', '$modified_ip')";
		$result = $conn->query($sql);
		

		header("Location: ../mySqlDb/home.php");
}
