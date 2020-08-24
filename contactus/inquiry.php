<?php

//connect to the server
include '../sqlconnection.php' ;

//getting user inputs into variables
$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

/*
//to prevent my sql injection
$email = stripcslashes($email); 
$password = stripcslashes($password); 
$email = mysql_real_escape_string($email); 
$password = mysql_real_escape_string($password); 
*/

//query
$qry = "INSERT INTO contact (FirstName,LastName,Email,PhoneNumber,Message) VALUES('$fname','$lname','$email','$phone','$message')";
$result = mysqli_query($con,$qry);

if($result == true){
    echo "Data inserted Successfully!";
}
else{
    die("Error inserting data".mysqli_error($con));
}

$to = "seasidesouthpark@gmail.com";

$headers = "From: $email \r\n";

$headers .= "Reply-To: $email \r\n";

mail($to,$message,$headers);


?>