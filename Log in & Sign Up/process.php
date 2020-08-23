<?php

//connect to the server
include '../sqlconnection.php' ;

//getting user inputs into variables
$email = $_POST['lemail'];
$password = $_POST['lpassword'];

//to prevent my sql injection
$email = stripcslashes($email); 
$password = stripcslashes($password); 
$email = mysql_real_escape_string($email); 
$password = mysql_real_escape_string($password); 


//query
$qry = "select * from users where email = '$email' and password = '$password'";
$result = mysql_query($con,$qry);

$row = mysql_fetch_array($result);

if ($row['email'] == $email && $row['password'] == $password) {
    echo "Welcome !";
}
else{
    echo "invalid Email or Password";
}

?>