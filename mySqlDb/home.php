<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>

	<title>Home</title>

    	<!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


<style>
	.register-form{
		text-align: center;
	}
    .btn{
        padding: 40px;
    }
	
</style>
</head>

<body>


<div class="clearfix"></div><br />

<div class="container">

 	
	 <form class="register-form" method='post'>
 
    <table class='table table-bordered'>
 

        <tr>
        	
        		
        	
            <td colspan="2">
            <h1>Activity 1</h1>
           <!-- <button type="submit" class='btn btn-large btn-primary' name="btn-save">Insert Data</button>   -->
 			<p class="message">
 			<a href="../mySqlDb/insert.php" class='btn btn-large btn-primary'>Insert Data</a>
            <a href="../mySqlDb/display.php" class="btn btn-large btn-success">Display Data</a>
            </p>
           
            </td>
        </tr>
 
    </table>
</form>

</div>


</body>
</html>