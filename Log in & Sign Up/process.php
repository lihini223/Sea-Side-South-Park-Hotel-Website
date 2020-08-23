<?php
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
$qry = "";
$result = mysql_query();

?>