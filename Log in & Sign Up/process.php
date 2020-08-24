<?php

//connect to the server
include '../sqlconnection.php' ;

//getting user inputs into variables
$email = $_POST['lemail'];
$password = $_POST['lpassword'];

//to prevent my sql injection
//$email = stripcslashes($email); 
//$password = stripcslashes($password); 
//$email = mysql_real_escape_string($email); 
//$password = mysql_real_escape_string($password); 


//query
$qry = "select * from users where email = '$email' and password = '$password'";
$result = mysqli_query($con,$qry);

$row = mysqli_fetch_array($result);

if ($row['Email'] == $email && $row['Password'] == $password) {
    
    header('Location: ../HomePage/index.html');
    exit;
    echo "Welcome !";
}
else{
    echo "invalid Email or Password";
}

?>