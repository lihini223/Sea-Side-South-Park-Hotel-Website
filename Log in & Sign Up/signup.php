<?php

//connect to the server
include '../sqlconnection.php' ;

//getting user inputs into variables
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
/*
//to prevent my sql injection
$email = stripcslashes($email); 
$password = stripcslashes($password); 
$email = mysql_real_escape_string($email); 
$password = mysql_real_escape_string($password); 
*/

//query
$qry = "INSERT INTO users (Name,Email,Password) VALUES('$name','$email','$password')";
$result = mysqli_query($con,$qry);

if($result == true){
    echo "Data inserted Successfully!";
}
else{
    die("Error inserting data".mysqli_error($con));
}
?>