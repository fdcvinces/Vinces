<?php

$DB_host = "localhost";
$DB_user = "root";
$DB_pass = "admin123";
$DB_name = "my_db";


try
{
	$DB_con = new PDO("mysql:host={$DB_host};dbname={$DB_name}",$DB_user,$DB_pass);
	$DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	//echo "Connected";
}
catch(PDOException $e)
{
	echo $e->getMessage();
}

include_once '../PDO/class.crud.php'; //change path

$crud = new crud($DB_con);	//instance

?>