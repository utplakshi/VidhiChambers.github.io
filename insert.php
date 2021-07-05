<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  
  <link rel="stylesheet" href="css/style.css">
  <title>VIDHI CHAMBERS</title>
</head>
<body id= "pagetop">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="mainNav" class="collapse">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">VIDHI CHAMBERS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
     <!----NAVIGATION-->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php">Home<span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php ">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php e">Expertise</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php">Team</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="index.php">Appointment</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php ">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div id="demo" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/img1.jpg" alt="first slides" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/img2.jpg" alt="second slides" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/img3.jpg" alt="third slides" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/img4.jpg" alt="fouth slides" width="1100" height="500">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
</body>
</html>

<?php
  
        // servername => localhost
        // username => 
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "root", "", "vidhi chambers");
          
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
          
        // Taking all 5 values from the form data(input)
        $first_name =  $_REQUEST['first_name'];
        $last_name = $_REQUEST['last_name'];
        $number =  $_REQUEST['number'];
        $city = $_REQUEST['city'];
        $email = $_REQUEST['email'];
        $description= $_REQUEST['description'];
        $date= $_REQUEST['date'];
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO appointments  VALUES ('','$first_name', 
            '$last_name','$number','$city','$email','$description','$date','')";
          
        if(mysqli_query($conn, $sql)){
          echo "<script type='text/javascript'>
          alert('Appointment Booked');
          window.history.go(-1);
          </script>";
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
          
        // Close connection
        mysqli_close($conn);
?>
