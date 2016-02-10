<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
	<link rel="stylesheet" type="text/css"  href="style.css"/>
	</head>
	<body>
 <header><h2>Dashboard</h2> </header>
 <br>
 <br>
 <h1 style="text-align:center; position:absolute; top:40%; left:40%;">
<?php 
echo "Welcome ";
 echo $_POST["name"];
 ?>
</h1>
</body>
</html>
