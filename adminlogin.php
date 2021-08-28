<?php session_start();  ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script type="text/javascript" src="js/jquery.js"></script>
  <link rel="stylesheet" href="css/login.css">
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
          <a class="nav-link" aria-current="page" href="index.html">Home<span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="adminlogin.php">Admin</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


<br>
<br>
<br>
	<!-- this is for donor registraton -->
  <div class="login">
        <!-- <h1 class="text-center" style="background-color:;color: #fff;">Admin Panel</h1> -->
        <div class="form-box col-lg-3 col-md-2">
            <div class="formstyle">
                <h2>Admin</h2>
                <br>
                <form action="" method="post" class="text-center">
                    <label>
						<input type="text" name="username"  placeholder="username" required style="margin-right: 75px;">
					</label><br><br>
                    <label>
						<input type="password" name="password"  placeholder="password" required style="margin-right: 75px;">
					</label><br><br>
                    <button name="submit" type="submit" style="margin-top:3px;padding:3px 25px; border-radius:4px;margin-right:75px;">Login</button> <br>


                    <?php 
                    $_SESSION['adminstatus']="";
                    include('config.php');
                    if(isset($_POST["submit"])){
                    $sql= "SELECT * FROM users WHERE username= '" . $_POST["username"]."' AND password= '" . $_POST["password"]."'";
                    $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                    $_SESSION["username"]= $_POST["username"];
                                    $_SESSION['adminstatus']= "yes";
                                    echo "<script>location.replace('adminpanel.php');</script>";
                                } else {
                                    echo "<span style='color:red;'>Invalid username or password</span>";
                                }
                $conn->close();		
            }
            
     ?>

                    <!-- login validation End-->

                </form> <br>&nbsp;&nbsp;&nbsp;			
				<br>		
	</div>
	
	
</div>
	<br>
  <br>
  <br>
  <br>
  <br>
  <footer>
					<p class="text-center">&copy;<?php echo date('Y') ?>-All Rights Reserved By Admin</p>
	</footer>

</body>
</html>

