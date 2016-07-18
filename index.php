<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>book</title>
	<!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
</head>
<body>
	<?php 
		include_once("controller/Controller.php");  
	  
		$controller = new Controller(); 
		$controller->conn(); 
		$controller->invoke();  
	 ?>
</body>
</html>