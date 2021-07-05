<?php
$name=$_REQUEST['Name'];
$email=$_REQUEST['Email'];
$message=$_REQUEST['Message'];

if(empty($name) || empty($email) || empty($message)){
    echo "Please fill all the fields";
}
else{
    mail("utplakshi.singh@gmail.com","A persom tried to contact you",$message,"From: $name <$email>");
    echo "<script type='text/javascript'>
    alert('Your message sent successfully');
    window.history.go(-1);
    </script>";
}
?>