<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<form method="POST">
<input type="text" name="month" placeholder="Month" required>
<input type="text" name="year" placeholder="Year" required>
<button  onclick="myFunction()" type="submit">Submit</button>
</form>
<p id="demo"></p>
<p id="demo1"></p>
<!-- <?php
	$month = $_POST['month'];
	$year =$_POST['year'];
	echo $month;
	echo "<br>";
	echo $year;
	//echo date('Y-m-d H:i:s');
?> -->

<script>
	var setDate = new Date();
	setDate.setMonth(month);
	//setDate.setFullYear();
	document.getElementById("demo1").innerHTML = setDate;
</script>
</body>
</html>