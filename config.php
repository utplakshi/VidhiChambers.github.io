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

?>	