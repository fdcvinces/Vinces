<?php
include_once '../PDO/dbconnect.php';
if(isset($_POST['btn-update']))
{
	$id = $_GET['edit_id'];
	$product_id = $_POST['product_id'];
	$name = $_POST['name'];
	$description = $_POST['description'];
	$type = $_POST['type'];
	$created_date = date('Y-m-d H:i:s');
	$modified_date = date('Y-m-d H:i:s');
	$created_ip = $_SERVER['REMOTE_ADDR'];
	$modified_ip = $_SERVER['REMOTE_ADDR'];
	

	if($crud->updateProduct($id,$product_id,$name,$description,$type,$created_date,$modified_date,$created_ip,$modified_ip))
	{
		$msg = "<div class='alert alert-info'>
				<strong>WOW!</strong> Record was updated successfully <a href='#'>HOME</a>!
				</div>";
	}
	else
	{
		$msg = "<div class='alert alert-warning'>
				<strong>SORRY!</strong> ERROR while updating record !
				</div>";
	}
}

if(isset($_GET['edit_id']))
{
	$id = $_GET['edit_id'];
	extract($crud->getID1($id));	
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

<div class="clearfix"></div>

<div class="container">
<?php
if(isset($msg))
{
	echo $msg;
}
?>
</div>

<div class="container">

  
   <form class="register-form"  method='post'>
 
    <table class='table table-bordered'>
 

        <tr>
          
            
          
            <td colspan="2">
            <h1>Product Insert Form</h1>
           <!-- <button type="submit" class='btn btn-large btn-primary' name="btn-save">Insert Data</button>   -->

        <tr>
            <td></td>
            <td><input type='text' placeholder="Product ID" id='product_id' name='product_id' class='form-control'  value="<?php echo $product_id; ?>" required></td>
        </tr>
 
        <tr>
            <td></td>
            <td><input type='text' placeholder="Name" id='name' name='name' class='form-control'   value="<?php echo $name; ?>" required></td>
        </tr>

         <tr>
            <td></td>
            <td><input type='text' placeholder="Description" id='description' name='description' class='form-control' value="<?php echo $description; ?>"  required></td>
        </tr>

        <tr>
            <td></td>
            <td><input type='text' placeholder="Type" id='type' name='type' class='form-control' value="<?php echo $type; ?>"  required></td>
        </tr>


        <tr>
            <td colspan="2">
                <button type="submit" class="btn btn-primary" name="btn-update">
    			<span class="glyphicon glyphicon-edit"></span>  Update this Record
				</button>
                <a href="../PDO/dataInsertedProduct.php" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i> &nbsp; CANCEL</a>
            </td>
        </tr>


</body>
</html>