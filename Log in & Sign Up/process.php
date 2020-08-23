<?php
//getting user inputs into variables
$email = $_POST['lemail'];
$password = $_POST['lpassword'];

//to prevent my sql injection
$username = stripcslashes($email); 
$password = stripcslashes($password); 
$username = mysql_real_escape_string($email); 
$password = mysql_real_escape_string($password); 

//connect to the server


?>