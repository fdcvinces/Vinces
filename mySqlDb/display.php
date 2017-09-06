
<!DOCTYPE html>
<html>
<head>
	<title>for display.php</title>

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
        margin: 3px;
    }
    #back{
        padding-left: 70px;
        padding-right: 70px;
    
</style>

</head>
<body>


<div class="clearfix"></div><br />

<div class="container">

 	
	 <form class="register-form" method='post'>
 
    <table class='table table-bordered'>
 

        <tr>
        	
        		
        	
            <td colspan="2">
            <h1>Display</h1>
           <!-- <button type="submit" class='btn btn-large btn-primary' name="btn-save">Insert Data</button>   -->

 			
            <div class="btn-group">
            <div>
 			<a href="../mySqlDb/displayUser.php" class='btn btn-large btn-primary' name="display" value="display">Display Users Data</a>
            <a href="../mySqlDb/displayProduct.php" class="btn btn-large btn-success" name="display" value="display">Display Products Data</a>
            
            </div>
            <div>
            <a href="../mySqlDb/displayUser1.php" class='btn btn-large btn-info' name="display1" value="display1">Display Filtered Users Data</a>
            <a href="../mySqlDb/displayProduct1.php" class="btn btn-large btn-danger" name="display1" value="display1">Display Filtered Products Data</a>
            </div>
            <div>
            <a id="back" href="../mySqlDb/home.php" class="btn btn-large btn-warning">Back</a>
            </div>
            </div>
           

            </td>
        </tr>
 
    </table>
</form>

</div>


</body>
</html>