<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Vidhi Chambers</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>


	<?php
		$_SESSION["username"]="";
		$_SESSION["password"]="";

		$_SESSION['adminstatus']="";
		      header("location:adminlogin.php");

	 ?>
 <?php include('footer.php'); ?>


</body>
</html>
