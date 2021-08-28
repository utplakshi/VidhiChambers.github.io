<?php if(!isset($_SESSION)){
	session_start();
	}
require_once("config.php");
$query="select * from appointments";
$result= mysqli_query($conn, $query) or die(mysqli_error($conn));
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <title>Vidhi Chambers</title>
</head>
<body class="bg-dark">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="mainNav" class="collapse">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Admin Panel</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

            <!----NAVIGATION-->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Appointment Details<span class="sr-only">
            </span>
          </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="message.php">Messages</a>
                    </li>
					<li class="nav-item">
                        <a class="nav-link" href="contacted.php">Reached Out</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<div class="container">
	<div class="row">
       <div class="col mt-5">
		   <div class="card mt-5">
                <table class="table table-bordered">
					<tr>
						<td>First Name</td>
						<td>Last Name</td>
						<td>Mobile</td>
						<td>City</td>
						<td>Email</td>
						<td>Description</td>
						<td>Date</td>
</tr>	
<?php
                      while ($row = mysqli_fetch_assoc($result) or die("<p color=\"#f00\">Booked Appointments</p>")) {
						  $first_name=$row['first_name'];
						  $last_name=$row['last_name'];
						  $number=$row['number'];
						  $city=$row['city'];
						  $email=$row['email'];
						  $description=$row['description'];
						  $date=$row['date'];
                
?>
<tr>
	<td><?php echo $first_name ?></td>
	<td><?php echo $last_name ?></td>
	<td><?php echo $number ?></td>
	<td><?php echo $city ?></td>
	<td><?php echo $email ?></td>
	<td><?php echo $description?></td>
	<td><?php echo $date?></td>
</tr>
<?php 
					  }
?>
				</table>
		   </div>
	   </div>
	</div>
</div>


</body>
</html>