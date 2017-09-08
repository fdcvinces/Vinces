<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div>
<form id='users' action='../Vinces/insert.php' method ='POST'>
			<input type='text' id='first_name' name='first_name' placeholder='Firstname' required><br>
			<input type='text' id='middle_name' name='middle_name' placeholder='Middlename' required><br>
			<input type='text' id='last_name' name='last_name' placeholder='Lastname' required><br>
			<input type='text' id='gender' name='gender' placeholder='Gender' required><br>
			<input type='date' id='birthday' name='birthday' placeholder='Birthday' required><br>
			<!-- <input type='date' id='created_date' name='created_date' placeholder='Date Created' required><br>
			<input type='date' id='modified_date' name='modified_date' placeholder='Date Modified' required><br>-->
			<input type='text' id='created_ip' name='created_ip' placeholder='Created IP' required><br> 
			<input type='text' id='modified_ip' name='modified_ip' placeholder='Modified IP' required><br>
			<button type='submit'>Insert Users Data</button>
		</form>
<br><br>
		<form id='products' action='../Vinces/insertproduct.php' method ='POST'>
			<input type='text' id='product_id' name='product_id' placeholder='Product ID' required><br>
			<input type='text' id='name' name='name' placeholder='Name' required><br>
			<input type='text' id='description' name='description' placeholder='Description' required><br>
			<input type='text' id='type' name='type' placeholder='Type' required><br>
			<!--<input type='date' id='created_date' name='created_date' placeholder='Date Created' required><br>
			<input type='date' id='modified_date' name='modified_date' placeholder='Date Modified' required><br> -->
			<input type='text' id='created_ip' name='created_ip' placeholder='Created IP' required><br>
			<input type='text' id='modified_ip' name='modified_ip' placeholder='Modified IP' required><br>
			<button type='submit'>Insert Products Data</button><br>
			<!-- for date placeholder -->
			<!-- <input placeholder="Date" class="textbox-n" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="date"> -->
			
		</form>

			<form  id='tableshow' action='../Vinces/tableusers.php' method='POST'>
	    		<button type='submit'>Show All Table Users</button>
			</form>

			<form  id='tableshow1' action='../Vinces/tableusers1.php' method='POST'>
	    		<button type='submit'>Show Filtered Table Users</button>
			</form>

			<form  id='tableshow2' action='../Vinces/tableproducts.php' method='POST'>
	    		<button type='submit'>Show All Table Products</button>
			</form>
			<form  id='tableshow2' action='../Vinces/tableproducts1.php' method='POST'>
	    		<button type='submit'>Show Filtered Table Products</button>
			</form>

		</div>
</body>
</html>

	