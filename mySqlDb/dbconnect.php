<?php

$conn = mysqli_connect("localhost","root","admin123","my_db");

	if(!$conn){
		die("Connection failed: ".mysqli_connect_error());
	} 
	