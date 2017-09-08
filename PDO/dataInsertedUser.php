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

<style>

#search{
    width: 130px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-image: url('searchicon.png');
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}

#search{
    width: 70%;
 }
#righto{
	float: right;
}

</style>

</head>
<body>


<div class="clearfix"></div>

<div class="container">
<!-- <a href="../Enroll/enrollStudent.php" class="btn btn-large btn-info"><i class="glyphicon glyphicon-plus"></i> &nbsp; Add Records</a> -->
  <a href="../PDO/home.php" class="btn btn-large btn-success"><span class="glyphicon glyphicon-home"> </span> Menu</a>
  <a href="../PDO/searchUser.php" class="btn btn-large btn-info"><span class="glyphicon glyphicon-search"> </span> Search</a>



 

 


</div>

<div class="clearfix"></div><br />




<div class="container">
     <table class='table table-bordered table-hover table-responsive'>

        


   <tr>
     <th>ID</th>
     <th>Firstname</th>
     <th>Middlename</th>
     <th>Lastname</th>
     <th>Gender</th>
     <th>Birthday</th>
     <th>Date Created</th>
     <th>Date Modified</th>
     <th>Created IP</th>
     <th>Modified IP</th>
  
     

     <th colspan="3" align="center">Actions</th>
     </tr>
     <?php
        $query = "SELECT * FROM users";       
        $records_per_page=15;
        $newquery = $crud->paging($query,$records_per_page);
        //echo $newquery;
        $crud->dataviewInsertedUser($newquery);
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