<?php

//connect to the server
include '../sqlconnection.php' ;

//getting user inputs into variables
$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$email = $_POST['email'];
$phonenumber = $_POST['phone'];
$checkin = $_POST['checkin'];
$checkout = $_POST['checkout'];
$adults = $_POST['Adults'];
$children = $_POST['Children'];
$rooms = $_POST['rooms'];
$mealtype = $_POST['roomt'];
$roomtype = $_POST['meal'];

/*
//to prevent my sql injection
$email = stripcslashes($email); 
$password = stripcslashes($password); 
$email = mysql_real_escape_string($email); 
$password = mysql_real_escape_string($password); 
*/

//query
$qry = "INSERT INTO booking (FirstName,LastName,PhoneNumber,Email,CheckIn,CheckOut,Adults,Children,MealType,RoomType,Rooms) 
VALUES('$fname','$lname','$email','$phonenumber','$checkin','$checkout','$adults','$children','$mealtype','$roomtype','rooms')";
$result = mysqli_query($con,$qry);

if($result == true){
    echo "<br>You will recieve the booking confirmation including your payment details via a email soon. Thank you for booking with us";
}
else{
    die("Error inserting data".mysqli_error($con));
}
?>