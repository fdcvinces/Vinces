<?php
//include_once '../PDO/dbconnect.php';

// if(isset($_POST['btn-search']))
// {
// 	 $search = $_GET['search'];
// 	// $crud->searchUser($search);
// 	 header("Location: searchUser.php?searched");	
//        // $search = $_POST['search'];

//         //echo $search; 
// }

?> 

<div class="clearfix"></div>


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
    width: 70%;
   
}    
#searchId{
     float: left;
}
</style>
</head>
<body>


<div class="clearfix"></div>


<div class="container">
 	
<div id="searchId">
<form>
  <input id="search" type="text" name="search" placeholder="Search..">
   <button class="btn btn-large btn-info" type="submit" name="btn-search"><i class="glyphicon glyphicon-search"></i> Search</button>   
</form>
</div>

   
   

	 <?php
	 if(isset($_GET['search']))
	 {
		 ?>
         <table class='table table-bordered'>
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

         </tr>

         <?php
         include_once '../PDO/dbconnect.php';
         $stmt = $DB_con->prepare("SELECT * FROM users WHERE first_name like :queryString or last_name like :queryString");
         $queryString = $_GET['search']; //.'%' for unfinished string
         $stmt->bindParam('queryString', $queryString, PDO::PARAM_STR);
         $stmt->execute();
         while($row=$stmt->fetch(PDO::FETCH_BOTH))
         {
             ?>
             <tr>
             <td><?php print($row['id']); ?></td>
             <td><?php print($row['first_name']); ?></td>
             <td><?php print($row['middle_name']); ?></td>
             <td><?php print($row['last_name']); ?></td>
         	 <td><?php print($row['gender']); ?></td>
             <td><?php print($row['birthday']); ?></td>
             <td><?php print($row['created_date']); ?></td>
             <td><?php print($row['modified_date']); ?></td>
             <td><?php print($row['created_ip']); ?></td>
             <td><?php print($row['modified_ip']); ?></td>
             </tr>
             <?php
         }
         ?>
         </table>
         <?php
	 }
	 ?>
</div>

<div class="container">
<p>
<?php
if(isset($_GET['search']))
{
	?>
  	<form method="post">
    <!-- <input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
    <button class="btn btn-large btn-primary" type="submit" name="btn-del">Home</button> -->
    <a href="../PDO/home.php" class="btn btn-large btn-primary"><i class="glyphicon glyphicon-home"></i> &nbsp; Home</a>
    <a href="../PDO/dataInsertedUser.php" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i> &nbsp; Back to Table</a>
    </form>   
    

	<?php
}
else
{
	?>
    <a href="../PDO/dataInsertedUser.php" class="btn btn-large btn-success"><i class="glyphicon glyphicon-backward"></i> &nbsp; Back to Table</a>
    <?php
}
?>
</p>
</div>	

</body>
</html>