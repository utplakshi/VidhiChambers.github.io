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
$name=$_REQUEST['nam'];
$email=$_REQUEST['emai'];
$message=$_REQUEST['messag'];
$sql = "INSERT INTO contact VALUES ('','$name', 
'$email','$message')";
if(empty($name) || empty($email) || empty($message)){
    echo "Please fill all the fields";
}
else  if(mysqli_query($conn, $sql)){

    echo "<script type='text/javascript'>
    alert('Your message sent successfully');
    window.history.go(-1);
    </script>";
}
else{
    echo "<script type='text/javascript'>
    alert('Error connecting to the database');
    window.history.go(-1);
    </script>"
        . mysqli_error($conn);
}
?>