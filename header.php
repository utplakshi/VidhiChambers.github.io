<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>medical management system</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<style>
		.error {color: #FF0000;}
	</style>
</head>
<body>


<?php
		if($_SESSION['adminstatus'] == ""){
			header("location:adminlogin.php");
		}
		
		   

	 ?>


<div class="container-fluid">
		<div class="header_top">
			<span style="font-size:50px;color:#2c2f84;font-weight:bolder;margin-left:15px;">Vidhi Chambers</span>
		</div>

	<!-- 	this is for menu -->
	<div class="navbar navbar-default nav">
		<nav class="menu">
			<ul>
				<li><a href="viewAppoinment.php">View Appoinment</a></li>
				<li><a href="logout.php">Logout</a></li>
			</ul>
		</nav>
	</div>
	
