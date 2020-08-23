<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "hoteldb";

//connect to the server and select database
$con = mysqli_connect($server,$username,$password,$database);

//check connection
if(!$con){
    die("Connection Error!".mysqli_connect_error());
}
else{
    echo "Connected Successfully!";
}

?>