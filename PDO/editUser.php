<?php
include_once '../PDO/dbconnect.php';
if(isset($_POST['btn-update']))
{
	$id = $_GET['edit_id'];
	$first_name = $_POST['first_name'];
	$middle_name = $_POST['middle_name'];
	$last_name = $_POST['last_name'];
	$gender = $_POST['gender'];
	$birthday = $_POST['birthday'];
	$created_date = date('Y-m-d H:i:s');
	$modified_date = date('Y-m-d H:i:s');
	$created_ip = $_SERVER['REMOTE_ADDR'];
	$modified_ip = $_SERVER['REMOTE_ADDR'];
	

	if($crud->updateUser($id,$first_name,$middle_name,$last_name,$gender,$birthday,$created_date,$modified_date,$created_ip,$modified_ip))
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
	extract($crud->getID($id));	
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
            <h1>Update Insert Form</h1>
           <!-- <button type="submit" class='btn btn-large btn-primary' name="btn-save">Insert Data</button>   -->

        <tr>
            <td></td>
            <td><input type='text' placeholder="Firstname" id='first_name' name='first_name' value="<?php echo $first_name; ?>" class='form-control' required></td>
        </tr>
 
        <tr>
            <td></td>
            <td><input type='text' placeholder="Middlename" id='middle_name' name='middle_name' value="<?php echo $middle_name; ?>" class='form-control' required></td>
        </tr>

         <tr>
            <td></td>
            <td><input type='text' placeholder="Lastname" id='last_name' name='last_name' value="<?php echo $last_name; ?>" class='form-control' required></td>
        </tr>

          <tr>
            <td></td>
            <td>Gender<div class="form-group">
              <div class="col-md-4">
              <div class="radio">
                <label for="Gender-0">
                  <input type="radio" name="gender" id="gender-0" value="Male" checked="checked">
                  Male
                </label>
              </div>
              <div class="radio">
                <label for="Gender-1">
                  <input type="radio" name="gender" id="gender-1" value="Female">
                  Female
                </label>
              </div>
              </div>
            </div></td>
        </tr>

        <tr>
            <td></td>
            <!--<td><input type='date' placeholder="Birthday" id='birthday' name='birthday' class='form-control' required></td>-->
            <td><input placeholder="Birthday" class="textbox-n" name="birthday" value="<?php echo $birthday; ?>" type="text" onfocus="(this.type='date')" onblur="(this.type='text')" id="birthday"></td>
        </tr>

        <tr>
            <td colspan="2">
                <button type="submit" class="btn btn-primary" name="btn-update">
    			<span class="glyphicon glyphicon-edit"></span>  Update this Record
				</button>
                <a href="../PDO/dataInsertedUser.php" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i> &nbsp; CANCEL</a>
            </td>
        </tr>


</body>
</html>