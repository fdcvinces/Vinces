<?php
include_once '../PDO/dbconnect.php';
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
<!-- <a href="../Enroll/enrollStudent.php" class="btn btn-large btn-info"><i class="glyphicon glyphicon-plus"></i> &nbsp; Add Records</a> -->
  <a href="../PDO/home.php" class="btn btn-large btn-success"><span class="glyphicon glyphicon-home"></span> Menu</a>
</div>

<div class="clearfix"></div><br />

<div class="container">
     <table class='table table-bordered table-hover table-responsive'>

        


   <tr>
      <th>ID</th>
     <th>Product ID</th>
     <th>Name</th>
     <th>Description</th>
     <th>Type</th>
     <th>Date Created</th>
     <th>Date Modified</th>
     <th>Created IP</th>
     <th>Modified IP</th>
  
     

     <th colspan="3" align="center">Actions</th>
     </tr>
     <?php
        $query = "SELECT * FROM products";       
        $records_per_page=15;
        $newquery = $crud->paging($query,$records_per_page);
        $crud->dataviewInsertedProduct($newquery);
     ?>
    <tr>
        <td colspan="12" align="center">
            <div class="pagination-wrap">
            <?php $crud->paginglink($query,$records_per_page); ?>
            </div>
        </td>
    </tr>
 
</table>
   
       
</div>



</body>
</html>