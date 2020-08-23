<?php

//connect to the server
include '../sqlconnection.php' ;

//getting user inputs into variables
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

//to prevent my sql injection
$email = stripcslashes($email); 
$password = stripcslashes($password); 
$email = mysql_real_escape_string($email); 
$password = mysql_real_escape_string($password); 

//connect to the server

//query
$qry = "insert into users (Name,Email,Password) values($name,$email,$password)";
$result = mysql_query($con,$qry);

if($result == true){
    echo "Data inserted Successfully!";
}
else{
    die("Error inserting data".mysql_error());
}
?>