
<?php
include_once '../PDO/dbconnect.php';
if(isset($_POST['btn-save']))
{
  $product_id = $_POST['product_id'];
  $name = $_POST['name'];
  $description = $_POST['description'];
  $type = $_POST['type'];
  $created_date = date('Y-m-d H:i:s');
  $modified_date = date('Y-m-d H:i:s');
  $created_ip = $_SERVER['REMOTE_ADDR'];
  $modified_ip = $_SERVER['REMOTE_ADDR'];
  //for PDO
  if($crud->createProduct($product_id,$name,$description,$type,$created_date,$modified_date,$created_ip,$modified_ip))
  {
    header("Location: insertProduct.php?inserted");
  }
  else
  {
    header("Location: insertProduct.php?failure");
  }
  

}
?>

<div class="clearfix"></div>

<?php
if(isset($_GET['inserted']))
{
  ?>
    <div class="container">
  <div class="alert alert-info">
  <!--  <strong>Success!</strong> You are now registered <a href="../Login/login.php">Login</a>! -->
    <strong>Success!</strong> Record Inserted Successfully<a href="#"></a>!
  </div>
  </div>
    <?php
}
else if(isset($_GET['failure']))
{
  ?>
    <div class="container">
  <div class="alert alert-warning">
    <strong>SORRY!</strong> ERROR while inserting record !
  </div>
  </div>
    <?php
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>

		<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
<!--
<form id='users' action='../mySqlDb/home.php' method ='POST'>
			<input type='text' id='first_name' name='first_name' placeholder='Firstname' required><br>
			<input type='text' id='middle_name' name='middle_name' placeholder='Middlename' required><br>
			<input type='text' id='last_name' name='last_name' placeholder='Lastname' required><br>
			<input type='text' id='gender' name='gender' placeholder='Gender' required><br>
			<input type='date' id='birthday' name='birthday' placeholder='Birthday' required><br>
			<!-- <input type='date' id='created_date' name='created_date' placeholder='Date Created' required><br>
			<input type='date' id='modified_date' name='modified_date' placeholder='Date Modified' required><br>

			<input type='text' id='created_ip' name='created_ip' placeholder='Created IP' required><br> 
			<input type='text' id='modified_ip' name='modified_ip' placeholder='Modified IP' required><br>
			<button type='submit'>Insert Users Data</button>
		</form>
		-->


<div class="container">

 	
	 <form class="register-form"  method='post'>
 
    <table class='table table-bordered'>
 

        <tr>
        	
        		
        	
            <td colspan="2">
            <h1>Product Insert Form</h1>
           <!-- <button type="submit" class='btn btn-large btn-primary' name="btn-save">Insert Data</button>   -->

        <tr>
            <td></td>
            <td><input type='text' placeholder="Product ID" id='product_id' name='product_id' class='form-control' required></td>
        </tr>
 
        <tr>
            <td></td>
            <td><input type='text' placeholder="Name" id='name' name='name' class='form-control' required></td>
        </tr>

         <tr>
            <td></td>
            <td><input type='text' placeholder="Description" id='description' name='description' class='form-control' required></td>
        </tr>

        <tr>
            <td></td>
            <td><input type='text' placeholder="Type" id='type' name='type' class='form-control' required></td>
        </tr>

     <!--   <tr>
            <td></td>
            <td><input type='password' placeholder="Gender" id='gender' name='gender' class='form-control' required></td>
        </tr> -->




        	<tr>

            <td colspan="2">
            
           <!-- <button type="submit" class='btn btn-large btn-primary' name="btn-save">Insert Data</button>   -->
 			<p class="message">
 			<!-- <a href="../mySqlDb/insert.php" class='btn btn-large btn-primary'>Insert Data</a> -->
      <button type="submit" class="btn btn-primary" name="btn-save">
        <span class="glyphicon glyphicon-plus"></span> Insert Data
      </button> 

 			 <a href="../PDO/dataInsertedProduct.php" class="btn btn-large btn-success"><span class="glyphicon glyphicon-list"></span> View Table</a>
            
            </p>
           
            </td>
        </tr>

        </tr>
 
    </table>
</form>

</div>


</body>
</html>