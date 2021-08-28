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
