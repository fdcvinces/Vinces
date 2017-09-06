<!doctype html>
<html>
  <head>
	<meta charset="utf-8">
	<title>Activity page</title>
  </head>
  <body>
	<!--<h1 id="myHeader">Hello Bob</h1>-->
	
	<p><h1>Hello <span id="myHeader"> Bob</span><h1></p>
 
	<label for="name">Enter name:</label>
	<input type="text" id="name1">
	<button onclick="myFunction()">Change user</button>

	<script>
		function myFunction(){
			var x = document.getElementById("name1").value;
    document.getElementById("myHeader").innerHTML = x;
		}

	
	</script>
  </body>
</html>
