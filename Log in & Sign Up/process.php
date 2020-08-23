<?php

include '../sqlconnection.php' ;

//getting user inputs into variables
$email = $_POST['lemail'];
$password = $_POST['lpassword'];

//to prevent my sql injection
$email = stripcslashes($email); 
$password = stripcslashes($password); 
$email = mysql_real_escape_string($email); 
$password = mysql_real_escape_string($password); 

//connect to the server

//query
$qry = "select * from users where email = '$email' and password = '$password'";
$result = mysql_query($con,$qry);

?>